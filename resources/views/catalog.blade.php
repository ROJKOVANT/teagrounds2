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
            <h3>Черный чай</h3>
        </section>
        <!--блок популярные товары-->
        <section class="top_tovar">
            <div class="top_tovar_tea">
                <h4><span>—</span> Новые товары <span>—</span></h4>
                <div class="subparagraph3">
                    <img src="{{ asset("img/svg6.svg") }}" alt="">
                </div>
                <div class="subparagraph4">
                    <img src="{{ asset("img/svg4.svg") }}" alt="">
                </div>
                <div class="container">
                    <div class="card">
                        <div class="global1">
                            <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                            <h5>Английский Садовник</h5>
                            <p>260 ₽/50гр.</p>
                        </div>
                        <div class="btn_top1">
                            <button class="btn_top1_more1">Подробнее</button>
                        </div>
                        <div class="btn_top2">
                            <button class="btn_top1_more1">Добавить</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="global1">
                            <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                            <h5>Английский Садовник</h5>
                            <p>260 ₽/50гр.</p>
                        </div>
                        <div class="btn_top1">
                            <button class="btn_top1_more1">Подробнее</button>
                        </div>
                        <div class="btn_top2">
                            <button class="btn_top1_more1">Добавить</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="global1">
                            <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                            <h5>Английский Садовник</h5>
                            <p>260 ₽/50гр.</p>
                        </div>
                        <div class="btn_top1">
                            <button class="btn_top1_more1">Подробнее</button>
                        </div>
                        <div class="btn_top2">
                            <button class="btn_top1_more1">Добавить</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="global1">
                            <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                            <h5>Английский Садовник</h5>
                            <p>260 ₽/50гр.</p>
                        </div>
                        <div class="btn_top1">
                            <button class="btn_top1_more1">Подробнее</button>
                        </div>
                        <div class="btn_top2">
                            <button class="btn_top1_more1">Добавить</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="global1">
                            <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                            <h5>Английский Садовник</h5>
                            <p>260 ₽/50гр.</p>
                        </div>
                        <div class="card-btn">
                            <button>Подробнее</button>
                        </div>
                        <div class="card-btn">
                            <button>Добавить</button>
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
                <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
                <li><a href="/about" class="link-effect">О нас</a></li>
                <li><a href="/shop" class="link-effect">Магазин</a></li>
                <li><a href="/blog" class="link-effect">Блог</a></li>
                <li><a href="" class="link-effect">Конструктор</a></li>
            </ul>
            <a href="" style="font-size:1.2vw; color: rgba(255, 255, 255, 0.2);">Политика конфидециальности</a>
            <div class="cop">
                <p>Tea Grounds  ©  2022 Все права защищены</p>
            </div>
        </footer>
    </body>
</html>
