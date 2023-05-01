@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="{{ asset("css/auth.css") }}">
</head>
<div class="container">
    <a class="navbar" href="{{ url('/') }}">
        {{ config('Tea Grounds', 'Tea Grounds') }}
    </a>
    <div class="d-c">
        <div class="d-f">
            <h1>Авторизируйтесь</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input_email">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Введите почту">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input_password">
                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Введите пароль">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="card-btn">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Войти') }}
                    </button>
{{--                    @if (Route::has('password.request'))--}}
{{--                    <a class="link-remove" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Востановить свой пароль?') }}--}}
{{--                    </a>--}}
{{--                    @endif--}}

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('У вас есть аккаунт?') }}</a>
                        </li>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
