@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/adminTovarAdd.css") }}">
</head>
<div class="navigation">
    <div class="navigation-f1">
        <li><a href="/" style="font-size:2.5vw;">Tea Grounds</a></li>
    </div>

    <div class="navigation-f2">
        <li><a href="admin">Клиенты</a></li>
        <li><a href="adminTovarAdd">Добавить товар</a></li>
        <li><a href="adminTovarDelete">Удалить товар</a></li>
        <li><a href="">Добавить статью</a></li>
        <li><a href="adminBlogDelete">Удалить статью</a></li>
    </div>

    <div class="navigation-f4">
        <li><a href="">Запросы</a></li>
        <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}</a>
        </li>
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
            <p>Добавить товар</p>
        </div>
        
        <!--Клиенты-->
        <div class="info">
            <p>Данные клиента</p>
            <div class="block">
                <div class="info-avatar">
                    <div class="elips"></div>
                    <p>Рожков Антон Александрович</p>
                </div>
                <div class="info-info">
                    <div class="info-login">
                        <h4>Логин:</h4>
                        <p>Anton</p>
                    </div>
                    <div class="info-email">
                        <h4>Почта:</h4>
                        <p>antonrojkov_04@mail.ru</p>
                    </div>
                </div>
            </div>

        </div>
    </div>