@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/constructor.css") }}">
    <title>Конструктор</title>
</head>
<body>
<!--блок шапка-->
<header>
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
    <div class="navbar">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <ul class="navigation">
            <li class="nav-item"><a href="/about" class="link-effect">О нас</a></li>
            <li class="nav-item"><a href="/shop" class="link-effect">Магазин</a></li>
            <li class="nav-item"><a href="/blog" class="link-effect">Блог</a></li>
            <li class="nav-item"><a href="/constructor" class="link-effect">Конструктор</a></li>
            <li class="nav-item"><a href="/carts" class="link-effect">Корзина{{$count}}</a></li>
            <li class="nav-item"><a href="/register">
                    @auth
                        {{ Auth::user()->name }}
                    @endauth

                    @guest
                        Войти
                    @endguest
                </a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</header>


{{--Блок экран приведствия--}}
<section class="paragraph">
    <div class="container1">
        <div class="block1">
            <h3>Соберите подарок <br>
                так, как нужно <br>
                именно вам!
            </h3>
            <p>Для этого просто нажмите “начать”</p>
            <div class="card-btn">
                <a href="#"><button class="btn_top1_more1">Начать</button></a>
            </div>
        </div>
        <img src="img/const.png" alt="">
    </div>
    <div class="container2">
        <h3>Как это работает</h3>
        <div class="box-1">
            <div class="info">
                <h4>1 шаг </h4>
                <p>Выберите упаковку для вашего <br>
                    подарка!
                </p>
            </div>
            <img src="img/svg5.svg" alt="">
        </div>
        <div class="box-2">
            <div class="info">
                <h4>2 шаг </h4>
                <p>Выберите чай который вы хотите <br>
                    добавить в ваш подарок!
                </p>
            </div>
            <img src="img/svg1.svg" alt="">
        </div>
        <div class="box-1">
            <div class="info">
                <h4>3 шаг </h4>
                <p>Оплатите заказ как вы его <br>
                    соберете!
                </p>
            </div>
            <img src="img/svg6.svg" alt="">
        </div>
        <div class="box-2">
            <div class="info">
                <h4>4 шаг </h4>
                <p>Мы доставим ваш подарок в <br>
                    магазин или по вашему адресу!
                </p>
            </div>
            <img src="img/svg2.svg" alt="">
        </div>
    </div>
    <a href="#" class="go-top"><img src="img/upbtn.png" alt=""></a>
</section>

<!--блок footer-->
<footer>
    <nav class="navbar">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <ul class="navigation">
            <li><a href="/about" class="link-effect">О нас</a></li>
            <li><a href="/shop" class="link-effect">Магазин</a></li>
            <li><a href="/blog" class="link-effect">Блог</a></li>
            <li><a href="/constructor" class="link-effect">Конструктор</a></li>
            <li><a href="/carts" class="link-effect">Корзина</a></li>
            <li><a href="/register" class="link-effect">
                    @auth
                        {{ Auth::user()->name }}
                    @endauth

                    @guest
                        Войти
                    @endguest
                </a></li>
        </ul>
    </nav>
    <div class="conf">
        <a href="">Политика конфидециальности</a>
    </div>
    <div class="cop">
        <p>Tea Grounds © 2022 Все права защищены</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/buttonUp.js"></script>
<script src="js/burgerMenu.js"></script>
</body>
</html>
@endsection
