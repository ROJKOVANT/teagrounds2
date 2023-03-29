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
        <div style="background-color: #7850ba;">
            <button type="button" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
    @endif
    <h3>Корзина</h3>

    <table>
        <tr>
            <th style="color: white;">Изображение товара</th>
            <th style="color: white;">Название товара</th>
            <th style="color: white;">Кол-во товара</th>
            <th style="color: white;">Цена товара</th>
            <th style="color: white;">Действие</th>
        </tr>

        <?php
        $totalprice = 0;
        ?>

        @foreach( $cart as $cart)
        <tr>
            <th style="color: white;"><img src="/{{$cart->picture}}" style="height: 5vw; width: 5vw;" alt=""></th>
            <th style="color: white;">{{$cart->towar_name}}</th>
            <th style="color: white;">{{$cart->quantity}} шт.</th>
            <th style="color: white;">{{$cart->price}} ₽/50гр.</th>
            <th style="color: white;">
                <a onclick=" return confirm('Вы действительно хотите удалить данный товар?')" href="{{route('carts.delete', ['id'=> $cart->id])}}">Удалить</a>
            </th>
        </tr>
            <?php
            $totalprice = $totalprice + $cart->price;
            ?>
        @endforeach
    </table>
    <div style="color: white">
        <h1>Общая стоимость : {{$totalprice}} ₽</h1>
    </div>
    <div>
        <h1 style="color: white; font-size: 1.5vw; padding-bottom: 1vw">Перейти к заказу</h1>
        <a style="margin-right: 1vw; margin-left: 1vw;" href="/cash_order">Оплата при доставке</a>
        <a href="">Оплатить картой</a>
    </div>
</section>

<!--блок footer-->
<footer>
    <ul class="navigation_footer">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <li><a href="/about" class="link-effect">О нас</a></li>
        <li><a href="/shop" class="link-effect">Магазин</a></li>
        <li><a href="/blog" class="link-effect">Блог</a></li>
        <li><a href="" class="link-effect">Конструктор</a></li>
    </ul>
    <div class="conf">
        <a href="">Политика конфидециальности</a>
    </div>
    <div class="cop">
        <p>Tea Grounds  ©  2022 Все права защищены</p>
    </div>
</footer>
</body>
</html>
