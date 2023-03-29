@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
</head>
<div class="navigation">
    <div class="navigation-f1">
        <li class="log"><a href="/">Tea Grounds</a></li>
    </div>

    <div class="navigation-f2">
        <li><a href="/about">О нас</a></li>
        <li><a href="/shop">Магазин</a></li>
        <li><a href="/blog">Блог</a></li>
        <li><a href="admin">Конструктор</a></li>
    </div>

    <div class="navigation-f3">
        <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}</a>
        </li>
        <li><a href="/product">Заказы</a></li>
        <li><a href="/history">История заказов</a></li>
    </div>

    <div class="navigation-f4">
        <li><a href="/help">Помощь</a></li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Выход') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </div>
</div>
<div class="d-f">
    <div class="container">
        <div class="point">
            <p>Профиль</p>
        </div>
{{--        @php--}}
{{--            $data = \App\Models\User::all();--}}
{{--        @endphp--}}
        <div class="info">
            <p>Ваши данные</p>
{{--            @foreach($users as $el)--}}
            <div class="block">
                <div class="info-avatar">
                    <div class="elips"></div>
                    <p>{{Auth::user()->fio}}</p>
                </div>
                <div class="info-info">
                    <div class="info-login">
                        <h4>Ваш логин:</h4>
                        <p>{{Auth::user()->name}}</p>
                    </div>
                    <div class="info-email">
                        <h4>Ваша почта:</h4>
                        <p>{{Auth::user()->email}}</p>
                    </div>
                </div>
            </div>
{{--            @endforeach--}}
        </div>

        <div class="card">
            <p>Карта лояльности</p>
            <div class="card-info">
                <p>Всем новым клиентам мы дарим нашу карту лояльности . Благодаря ей вы сможете повышать свою скидку на товары а при первой покупке мы подарим вам подарок !</p>
                <div class="kartochka"></div>
                <div class="btn">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Офоримть карту') }}
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
