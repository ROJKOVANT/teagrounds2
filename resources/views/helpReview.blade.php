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
    <link rel="stylesheet" href="{{ asset("css/helpReview.css") }}">
    <title>Корзина</title>
</head>

<body>
<!--блок шапка-->
<header>
    <ul class="navigation">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <li><a href="/about" class="link-effect">О нас</a></li>
        <li><a href="/shop" class="link-effect">Магазин</a></li>
        <li><a href="/blog" class="link-effect">Блог</a></li>
        <li><a href="" class="link-effect">Конструктор</a></li>
        <li><a href="/carts" class="link-effect">Корзина</a></li>
        <li class="login"><a href="/register">
                @auth
                    {{ Auth::user()->name }}
                @endauth

                @guest
                    Войти
                @endguest
            </a></li>
    </ul>
</header>
<section class="paragraph">
    @if(session()->has('message'))
        <div>
            <button type="button" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
    @endif
    <h3>Сообщения</h3>

    <table class="table-block">
        <tr class="table-title">
            <th>Имя</th>
            <th>Почта</th>
            <th>Название темы</th>
            <th>Сообщение</th>
            <th>Действие</th>
        </tr>
        @foreach($help_reviews as $el)
            <tr class="table-content">
                <th>{{$el->name}}</th>
                <th>{{$el->email}}</th>
                <th>{{$el->header}}</th>
                <th>{{$el->message}} шт.</th>
                <th>
                    <a href="#">Ответить</a>
                </th>
            </tr>
        @endforeach
    </table>
</section>

<!--блок footer-->
<footer>
    <ul class="navigation_footer">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <li><a href="/about" class="link-effect">О нас</a></li>
        <li><a href="/shop" class="link-effect">Магазин</a></li>
        <li><a href="/blog" class="link-effect">Блог</a></li>
        <li><a href="" class="link-effect">Конструктор</a></li>
        <li><a href="/carts" class="link-effect">Корзина</a></li>
    </ul>
    <div class="conf">
        <a href="" class="link-effect">Политика конфидециальности</a>
    </div>
    <div class="cop">
        <p>Tea Grounds © 2022 Все права защищены</p>
    </div>
</footer>
</body>

</html>
