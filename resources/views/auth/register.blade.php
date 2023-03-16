@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="{{ asset("css/registr.css") }}">
</head>
<!-- <div class="container">
    <a class="navbar" href="{{ url('/') }}">
        {{ config('Tea Grounds', 'Tea Grounds') }}
    </a>
    <div class="d-c">
        <div class="d-f">
            <h1>Зарегистрируйтесь</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input_name">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Введите логин">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

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

                <div class="input_password_confirm">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Введите пароль еще раз">
                </div>

                <div class="btn_auth">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="link-remove" href="{{ route('password.request') }}">
                        {{ __('Востановить свой пароль?') }}
                    </a>
                    @endif

                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div> -->
<div class="container">
    <a class="navbar" href="{{ url('/') }}">
        {{ config('Tea Grounds', 'Tea Grounds') }}
    </a>
    <div class="d-c">
        <div class="d-f">
            <h1>Регистрация</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="input_name">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Введите логин">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input_email">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Введите логин">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input_password">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Введите логин">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input_password_confirm">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Введите логин">
                            </div>

                            <div class="card-btn">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Войти') }}
                                </button>

                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('У вас уже есть аккаунт!') }}</a>
                                    </li>
                                @endif
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
