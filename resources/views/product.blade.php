@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/product.css") }}">
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
            <p>Заказы</p>
        </div>
{{--        @php--}}
{{--            $order = \App\Models\Order::all();--}}
{{--        @endphp--}}
        {{--Товары--}}
        <div class="container1">
            @foreach($order as $el)
                <div class="card">
                    <h4 class="card-title">Товар {{$el->delivery_status}}</h4>
                    <img src="/{{$el->picture}}" alt="">
                    <p class="card-text">{{$el->towar_name}}</p>
                    <p class="card-text">{{$el->price}} ₽/50гр.</p>
                    <p class="card-text">{{$el->payment_status}}</p>
                    <div class="btn_top1">
                        <a href="{{route('products.more', ['id'=> $el->id])}}"><button class="btn_top1_more1">Подробнее о заказе</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

