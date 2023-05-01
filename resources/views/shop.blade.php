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
    <link rel="stylesheet" href="{{ asset("css/shop.css") }}">
    <title>Магазин</title>
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

    <!--блок каталог-->
    <section class="katalog">
        <div class="katalog_tea">
            <h4><span>—</span> Каталог <span>—</span></h4>
            <div class="subparagraph1">
                <img src="{{ asset("img/svg5.svg") }}" alt="">
            </div>
            <div class="subparagraph2">
                <img src="{{ asset("img/svg1.svg") }}" alt="">
            </div>
            @php
            $er = \App\Models\Category::all();
            @endphp
            <div class="wrapper1">
                @foreach($er as $category)
                <div class="item1">
                    <a href="http://127.0.0.1:8000/catalog/{{$category->id}}"><img src="{{ asset("img/block2img1.png") }}" alt=""></a>
                    <p>{{$category -> name}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--блок Новые товары-->
    <section class="top_tovar">
        <div class="top_tovar_tea">
            <h4><span>—</span> Новые товары <span>—</span></h4>
            <div class="subparagraph3">
                <img src="{{ asset("img/svg6.svg") }}" alt="">
            </div>
            <div class="subparagraph4">
                <img src="{{ asset("img/svg4.svg") }}" alt="">
            </div>
            <div class="container1">
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
            </div>
        </div>
    </section>

    <!--блок товары-->
    <section class="tovar">
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
            @php
            $er = \App\Models\Towar::orderBy('created_at', 'DESC')->get();
            @endphp
            @foreach($er as $towars)
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
        <a href="#" class="go-top"><img src="img/upbtn.png" alt=""></a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/buttonUp.js"></script>
</body>
</html>
