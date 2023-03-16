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
            <ul class="navigation">
                <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
                <li><a href="/about" class="link-effect">О нас</a></li>
                <li><a href="/shop" class="link-effect">Магазин</a></li>
                <li><a href="/blog" class="link-effect">Блог</a></li>
                <li><a href="" class="link-effect">Конструктор</a></li>
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
            <h3>Статьи</h3>

            <div class="container_btn">
                <button class="btn_top1">Все статьи</button>
                <button class="btn_top2">Советы покупателям</button>
                <button class="btn_top3">Важно знать</button>
            </div>

            <div class="container">
                <div class="card">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>СОВЕТЫ ПОКУПАТЕЛЯМ</h4>
                        </div>
                        <p class="card-text">
                            Чай с шариками — пенистый чайный напиток, в который обычно добавлены «жемчужины»
                        </p>
                        <div class="card-btn">
                            <button><a href="/OpenNews">Подробнее</a></button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>СОВЕТЫ ПОКУПАТЕЛЯМ</h4>
                        </div>
                        <p class="card-text">
                            Чай с шариками — пенистый чайный напиток, в который обычно добавлены «жемчужины»
                        </p>
                        <div class="card-btn">
                            <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>СОВЕТЫ ПОКУПАТЕЛЯМ</h4>
                        </div>
                        <p class="card-text">
                            Чай с шариками — пенистый чайный напиток, в который обычно добавлены «жемчужины»
                        </p>
                        <div class="card-btn">
                            <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>СОВЕТЫ ПОКУПАТЕЛЯМ</h4>
                        </div>
                        <p class="card-text">
                            Чай с шариками — пенистый чайный напиток, в который обычно добавлены «жемчужины»
                        </p>
                        <div class="card-btn">
                            <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>СОВЕТЫ ПОКУПАТЕЛЯМ</h4>
                        </div>
                        <p class="card-text">
                            Что такое “Bubble tea”
                        </p>
                        <div class="card-btn">
                            <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>СОВЕТЫ ПОКУПАТЕЛЯМ</h4>
                        </div>
                        <p class="card-text">
                            Что такое “Bubble tea”
                        </p>
                        <div class="card-btn">
                            <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>СОВЕТЫ ПОКУПАТЕЛЯМ</h4>
                        </div>
                        <p class="card-text">
                            Чай с шариками — пенистый чайный напиток, в который обычно добавлены «жемчужины»
                        </p>
                        <div class="card-btn">
                            <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>СОВЕТЫ ПОКУПАТЕЛЯМ</h4>
                        </div>
                        <p class="card-text">
                            Чай с шариками — пенистый чайный напиток, в который обычно добавлены «жемчужины»
                        </p>
                        <div class="card-btn">
                            <button>Подробнее</button>
                        </div>
                    </div>
                </div>
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
