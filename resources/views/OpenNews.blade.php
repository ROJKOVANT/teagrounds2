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
    <link rel="stylesheet" href="{{ asset("css/OpenNews.css") }}">
    <title>{{$news->subject}}</title>
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
    <!--блок Статья-->
    <section class="news">
        <div class="news_paragrph">
            <h3>{{$news->title}}</h3>
        </div>
        <div class="news_info1">
            <img src="{{$news->picture}}" alt="">
            <p>
                {{$news->content1}}
            </p>
        </div>
        <div class="news_info2">
            <p>
                {{$news->content2}}
            </p>
        </div>
    </section>

    <!--блок другие новости-->
    <section class="news_more">
        @php
        $randomNewses = App\Models\News::get()->random(4);
        @endphp
        <h3>Вам также может понравиться</h3>
        <div class="container">
            @foreach($randomNewses as $el)
            <div class="card">
                <img src="{{$el->picture}}" alt="">
                <div class="card-content">
                    <div class="card-title">
                        <h4>{{$el->paragraph->name}}</h4>
                    </div>
                    <p class="card-text">
                        {{$el->subject}}
                    </p>
                    <div class="card-btn">
                        <a href="{{route('OpenNews', ['id'=> $el->id])}}"><button class="btn_top1_more1">Подробнее</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn">
            <a href="/blog">Еще больше новостей</a>
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
            <p>Tea Grounds © 2022 Все права защищены</p>
        </div>
    </footer>
</body>

</html>