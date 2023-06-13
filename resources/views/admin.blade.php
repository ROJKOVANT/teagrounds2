@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/admin.css") }}">
</head>
<div class="navigation">
    <div class="navigation-f1">
        <li><a href="/" style="font-size:2.5vw;">Tea Grounds</a></li>
    </div>

    <div class="navigation-f2">
        <li><a href="admin">Клиенты</a></li>
        <li><a href="adminTovarAdd">Добавить товар</a></li>
        <li><a href="adminTovar">Товары</a></li>
        <li><a href="adminBlogAdd">Добавить статью</a></li>
        <li><a href="adminBlog">Статьи</a></li>
    </div>

    <div class="navigation-f4">
        <li><a href="/orders">Заказы</a></li>
        <li><a href="/podaroc">Наборы</a></li>
        <li><a href="/helpReview">Запросы</a></li>
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
            <p>Клиенты</p>
        </div>
    @php
        $data = \App\Models\User::all();
    @endphp

    @foreach($data as $el)
        <!--Клиенты-->
            <div class="info">
                <p>Данные клиента</p>
                <div class="block">
                    <div class="info-avatar">
                        <img src="img/user.png" alt="">
                        <p>{{$el->fio}}</p>
                    </div>
                    <div class="info-info">
                        <div class="info-login">
                            <h4>Логин:</h4>
                            <p>{{$el->name}}</p>
                        </div>
                        <div class="info-email">
                            <h4>Почта:</h4>
                            <p>{{$el->email}}</p>
                        </div>
                        <a href="{{route('admin.deleteInfo', ['id'=> $el->id])}}"><button type="submit" class="">Удалить клиента</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
