@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="{{ asset("css/registr.css") }}">
</head>
<div class="container">
    <a class="navbar" href="{{ url('/') }}">
        {{ config('Tea Grounds', 'Tea Grounds') }}
    </a>
    <div class="d-c">
        <div class="d-f">
            <h1>Регистрация</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="input_fio">
                                <input id="fio" type="text" class="form-control @error('fio') is-invalid @enderror" name="fio" value="{{ old('fio') }}" required autocomplete="fio" autofocus placeholder="Введите ФИО">
                            </div>

                            <div class="input_name">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Введите логин">
                            </div>

                            <div class="input_email">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Введите почту">
                            </div>

                            <div class="input_password">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Введите пароль">
                            </div>

                            <div class="input_password_confirm">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Введите пароль">
                            </div>
                            <div class="block">
                                <input type="checkbox" name="rules" class="check" required>
                                <p class="check-p">Вы соглашаетесь на обработку данных</p>
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
                        @if ($errors->any())
                            <div class="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
