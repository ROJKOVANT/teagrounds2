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
            <li><a href="/" style="font-size:2.5vw;">Tea Grounds</a></li>
            <li><a href="/about">О нас</a></li>
            <li><a href="/shop">Магазин</a></li>
            <li><a href="/blog">Блог</a></li>
            <li><a href="">Конструктор</a></li>
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
            <div class="wrapper1">
                <div class="item1">
                    <a href="/catalog"><img src="{{ asset("img/block2img1.png") }}" alt=""></a>
                    <p>Черный чай</p>
                </div>
                <div class="item2">
                    <img src="{{ asset("img/block2img1.png") }}" alt="">
                    <p>Зеленный чай</p>
                </div>
                <div class="item3">
                    <img src="{{ asset("img/block2img1.png") }}" alt="">
                    <p>Смешанный чай</p>
                </div>
                <div class="item4">
                    <img src="{{ asset("img/block2img1.png") }}" alt="">
                    <p>Bubble tea</p>
                </div>
            </div>
        </div>
    </section>

    <!--блок популярные товары-->
    <section class="top_tovar">
        <div class="top_tovar_tea">
            <h4><span>—</span> Популярные товары <span>—</span></h4>
            <div class="subparagraph3">
                <img src="{{ asset("img/svg6.svg") }}" alt="">
            </div>
            <div class="subparagraph4">
                <img src="{{ asset("img/svg4.svg") }}" alt="">
            </div>
            <div class="container">
                <div class="top1">
                    <div class="global1">
                        <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                        <h5>Английский Садовник</h5>
                        <p>260 ₽/50гр.</p>
                    </div>
                    <div class="btn_top1">
                        <button class="btn_top1_more1"><a href="/OpenTovar">Подробнее</a></button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Добавить</button>
                        <button class="btn_top3_more3">Купить</button>
                    </div>
                </div>
                <div class="top2">
                    <div class="global2">
                        <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                        <h5>Английский Садовник</h5>
                        <p>260 ₽/50гр.</p>
                    </div>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Добавить</button>
                        <button class="btn_top3_more3">Купить</button>
                    </div>
                </div>
                <div class="top3">
                    <div class="global3">
                        <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                        <h5>Английский Садовник</h5>
                        <p>260 ₽/50гр.</p>
                    </div>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Добавить</button>
                        <button class="btn_top3_more3">Купить</button>
                    </div>
                </div>
                <div class="top4">
                    <div class="global4">
                        <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                        <h5>Английский Садовник</h5>
                        <p>260 ₽/50гр.</p>
                    </div>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Добавить</button>
                        <button class="btn_top3_more3">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--блок товары-->
    <section class="tovar">
        <div class="container6">
            <div class="filtr">
                <h6>Фильтры</h6>
            </div>
            <div class="country">
                <h6>Страна</h6>
                <form class="country_form">
                    <label>
                        <input type="checkbox" name="languages" value="HTML">
                        Китай
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="languages" value="CSS">
                        Индия
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="languages" value="JS">
                        Япония
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="languages" value="JS">
                        Россия
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="languages" value="JS">
                        Кения
                    </label>
                </form>
            </div>
            <div class="price">
                <h6>Цена</h6>
                <form class="price_form">
                    <label>
                        <input type="checkbox" name="languages" value="HTML">
                        Дорогой чай
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="languages" value="CSS">
                        Дешевый чай
                    </label>
                    <br>
                </form>
            </div>
            <div class="btn1">
                <button class="btn_more1">Применить</button>
            </div>
            <div class="btn2">
                <button class="btn_more2">Сбросить</button>
            </div>
            <div class="teg">
                <p>Tea Grounds</p>
            </div>
        </div>
        <div class="separation"></div>
        <div class="container7">
            <div class="top1">
                <div class="global1">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top2">
                <div class="global2">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top3">
                <div class="global3">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top4">
                <div class="global4">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top5">
                <div class="global5">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top6">
                <div class="global6">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top7">
                <div class="global7">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top8">
                <div class="global8">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top9">
                <div class="global9">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top10">
                <div class="global10">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top11">
                <div class="global11">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
                </div>
            </div>
            <div class="top12">
                <div class="global12">
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                </div>
                <div class="btn_top1">
                    <button class="btn_top1_more1">Подробнее</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Добавить</button>
                    <button class="btn_top3_more3">Купить</button>
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
        </div>
    </section>

    <!--блок footer-->
    <footer>
        <ul class="navigation_footer">
            <li><a href="{{ url('/') }}" style="font-size:2.5vw;">Tea Grounds</a></li>
            <li><a href="{{ url('/about') }}">О нас</a></li>
            <li><a href="{{ url('/shop') }}">Магазин</a></li>
            <li><a href="{{ url('/blog') }}">Блог</a></li>
            <li><a href="">Конструктор</a></li>
        </ul>
        <a href="" style="font-size:1.2vw; color: rgba(255, 255, 255, 0.2);">Политика конфидециальности</a>
        <div class="cop">
            <p>Tea Grounds © 2022 Все права защищены</p>
        </div>
    </footer>
</body>

</html>