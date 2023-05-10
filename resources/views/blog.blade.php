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
    <link rel="stylesheet" href="{{ asset("css/blog.css") }}">
    <title>Статьи</title>
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
            <li class="nav-item"><a href="/carts" class="link-effect">Корзинаp{{$count}}</a></li>
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

    <section class="paragraph">
        <h3>Статьи</h3>
        @php
        $er = \App\Models\Paragraph::all();
        @endphp
        <div class="container_btn">
            <a class="" href="http://127.0.0.1:8000/blog/"><button class="btn_top1">ВСЕ НОВОСТИ</button></a>
            @foreach($er as $paragraph)
            <a class="" href="http://127.0.0.1:8000/blog/{{$paragraph->id}}"><button class="btn_top1">{{$paragraph->name}}</button></a>
            @endforeach
        </div>
        {{-- @php--}}
        {{-- $news = \App\Models\News::all();--}}
        {{-- @endphp--}}
        <div class="container">
            @foreach($news as $el)
            <div class="card">
                <img src="{{$el->picture}}" alt="">
                <div class="card-content">
                    <div class="card-title">
                        <h4>{{$el->paragraph->name}}</h4>
                    </div>
                    <p class="card-text">{{$el->subject}}</p>
                    <div class="card-btn">
                        <a href="{{route('OpenNews', ['id'=> $el->id])}}"><button class="btn_top1_more1">Подробнее</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
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
