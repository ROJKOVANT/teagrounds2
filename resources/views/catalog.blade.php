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
    <link rel="stylesheet" href="{{ asset("css/catalog.css") }}">
    <title>Черный чай</title>
</head>

<body>
    <!--блок шапка-->
    <header>
        <ul class="navigation">
            <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
            <li><a href="/about" class="link-effect">О нас</a></li>
            <li><a href="/shop" class="link-effect">Магазин</a></li>
            <li><a href="/blog" class="link-effect">Блог</a></li>
            <li><a href="/constructor" class="link-effect">Конструктор</a></li>
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
        <h3>{{$category->name}}</h3>
    </section>
    <!--блок товары-->
{{--    <section class="tovar">--}}
{{--        <div class="container6">--}}
{{--            <div class="filtr">--}}
{{--                <h6>Фильтры</h6>--}}
{{--            </div>--}}
{{--            <div class="country">--}}
{{--                <h6>Страна</h6>--}}
{{--                <form class="country_form">--}}
{{--                    <label>--}}
{{--                        <input type="checkbox" name="languages" value="HTML">--}}
{{--                        Китай--}}
{{--                    </label>--}}
{{--                    <br>--}}
{{--                    <label>--}}
{{--                        <input type="checkbox" name="languages" value="CSS">--}}
{{--                        Индия--}}
{{--                    </label>--}}
{{--                    <br>--}}
{{--                    <label>--}}
{{--                        <input type="checkbox" name="languages" value="JS">--}}
{{--                        Япония--}}
{{--                    </label>--}}
{{--                    <br>--}}
{{--                    <label>--}}
{{--                        <input type="checkbox" name="languages" value="JS">--}}
{{--                        Россия--}}
{{--                    </label>--}}
{{--                    <br>--}}
{{--                    <label>--}}
{{--                        <input type="checkbox" name="languages" value="JS">--}}
{{--                        Кения--}}
{{--                    </label>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="price">--}}
{{--                <h6>Цена</h6>--}}
{{--                <form class="price_form">--}}
{{--                    <label>--}}
{{--                        <input type="checkbox" name="languages" value="HTML">--}}
{{--                        Дорогой чай--}}
{{--                    </label>--}}
{{--                    <br>--}}
{{--                    <label>--}}
{{--                        <input type="checkbox" name="languages" value="CSS">--}}
{{--                        Дешевый чай--}}
{{--                    </label>--}}
{{--                    <br>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="btn1">--}}
{{--                <button class="btn_more1">Применить</button>--}}
{{--            </div>--}}
{{--            <div class="btn2">--}}
{{--                <button class="btn_more2">Сбросить</button>--}}
{{--            </div>--}}
{{--            --}}{{-- <div class="teg">--}}
{{--            --}}{{-- <p>Tea Grounds</p>--}}
{{--            --}}{{-- </div>--}}
{{--        </div>--}}
{{--        <div class="separation"></div>--}}
    <h4><span>—</span> Все товары <span>—</span></h4>
    <div class="container7">
            @foreach($towars as $towars)
            <div class="top1">
                <div class="global1">
                    <img src="{{$towars->picture}}" alt="">
                    <h5>{{$towars->name}}</h5>
                    <p>{{$towars->price}} ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <a href="{{route('OpenTovar', ['id'=> $towars->id])}}"><button class="btn_top1_more1">Подробнее</button></a>
                    <form action="{{url('add_cart',$towars->id)}}" method="Post">
                        @csrf
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit" class="btn_top1_more1">Добавить</button>
                    </form>
                </div>
            </div>
            @endforeach
            {{-- <div class="pagination">--}}
            {{-- <a href="#">&laquo;</a>--}}
            {{-- <a class="active" href="#">1</a>--}}
            {{-- <a href="#">2</a>--}}
            {{-- <a href="#">3</a>--}}
            {{-- <a href="#">4</a>--}}
            {{-- <a href="#">5</a>--}}
            {{-- <a href="#">6</a>--}}
            {{-- <a href="#">&raquo;</a>--}}
            {{-- </div>--}}
        </div>
    </section>

    <!--блок footer-->
    <footer>
        <ul class="navigation_footer">
            <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
            <li><a href="/about" class="link-effect">О нас</a></li>
            <li><a href="/shop" class="link-effect">Магазин</a></li>
            <li><a href="/blog" class="link-effect">Блог</a></li>
            <li><a href="/constructor" class="link-effect">Конструктор</a></li>
        </ul>
        <a href="" style="font-size:1.2vw; color: rgba(255, 255, 255, 0.2);">Политика конфидециальности</a>
        <div class="cop">
            <p>Tea Grounds © 2022 Все права защищены</p>
        </div>
    </footer>
</body>
</html>
