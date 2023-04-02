@extends('layouts.app')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset("css/more.css") }}">
    </head>
    <div class="navigation">
        <div class="navigation-f1">
            <li class="log"><a href="/">Tea Grounds</a></li>
        </div>

        <div class="navigation-f2">
            <li><a href="/about">О нас</a></li>
            <li><a href="/shop">Магазин</a></li>
            <li><a href="/blog">Блог</a></li>
            <li><a href="">Конструктор</a></li>
            <li><a href="/carts" class="link-effect">Корзина</a></li>
        </div>

        <div class="navigation-f3">
            <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                <p>{{$orders->towar_name}}</p>
            </div>

            <!--Клиенты-->
            <div class="container7">
                <li>
                    <a href="categorys">Информация о заказе</a>
                </li>
                <table class="table-block">
                    <tr class="table-title">
                        <th>Изображение товара</th>
                        <th>Название товара</th>
                        <th>Кол-во товара</th>
                        <th>Цена товара</th>
                        <th>Оплата</th>
                        <th>Статус</th>
                    </tr>
                        <tr class="table-content">
                            <th><img src="/{{$orders->picture}}" style="height: 5vw; width: 5vw;" alt=""></th>
                            <th>{{$orders->towar_name}}</th>
                            <th>{{$orders->quantity}} шт.</th>
                            <th>{{$orders->price}} ₽/50гр.</th>
                            <th>{{$orders->payment_status}}</th>
                            <th>{{$orders->delivery_status}}</th>
                        </tr>
                </table>
            </div>
        </div>
    </div>
