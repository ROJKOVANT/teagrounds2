@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
</head>
<div class="navigation">
    @php
        use Illuminate\Support\Facades\Auth;
        use App\Models\Cart;

        $count_cart = Cart::where('user_id', Auth::user()->id)->get();
        $count = 0;
        for ($i=0; $i < count($count_cart); $i++)
        {
            $count +=$count_cart[$i]['quantity'];
        }
    @endphp
    <div class="navigation-f1">
        <li class="log"><a href="/">Tea Grounds</a></li>
    </div>

    <div class="navigation-f2">
        <li><a href="/about">О нас</a></li>
        <li><a href="/shop">Магазин</a></li>
        <li><a href="/blog">Блог</a></li>
        <li><a href="/constructor">Конструктор</a></li>
        <li><a href="/carts" class="link-effect">Корзина{{$count}}</a></li>
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
            <div class="block">
                <div class="info-avatar">
                    <div class="elips">
                        <img src="img/user.png" alt="">
                    </div>
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
        </div>

        <div class="card">
            <p>Оставьте отзыв на сайте</p>
            <div class="card-info">
                <form action="{{route('home')}}" method="POST">
                    @csrf
                    <div>
                        <textarea name="site_review" class="textarea-form" placeholder="Напишите отзыв" cols="60" rows="10"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn_top1">Загрузить статью</button>
                </form>
            </div>
        </div>
    </div>
</div>
