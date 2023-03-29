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
        <link rel="stylesheet" href="{{ asset("css/welcome.css") }}">
        <title>Tea Grounds</title>
    </head>
    <!--<body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>--> <!--Регистрация-->
    <body>
        <!--блок шапка-->
        <header>
            <ul class="navigation">
                <li><a href="" style="font-size:2.5vw;">Tea Grounds</a></li>
                <li><a href="/about">О нас</a></li>
                <li><a href="/shop">Магазин</a></li>
                <li><a href="/blog">Блог</a></li>
                <li><a href="">Конструктор</a></li>
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

        <!--блок логотип-->
        <section class="under_header">
            <div class="logotip">
                <img src="{{ asset("img/logotip.svg") }}" alt="">
            </div>
        </section>

        <!--блок О нас-->
        <section class="about">
            <h3>О нас</h3>
            <div class="info">
                <div class="text_one">
                    <p>
                    Tea Grounds — был основан<br>
                    на стремлении установить<br>
                    стандарт качества и <br>
                    расширить представление<br>
                    о чае и его богатых,<br>
                    вдохновляющих традициях. <br>
                    </p>
                    <img src="{{ asset("img/block1img1.png") }}" alt="">
                </div>
                <div class="separation"></div>
                <div class="text_two">
                    <p>
                    20 лет мы занимаемся чаем.<br>
                    Из самых популярных <br>
                    запросов мы составили <br>
                    тематические подборки. <br>
                    Ищите и находите нужный <br>
                    чай для разных ситуаций.
                    </p>
                    <img src="{{ asset("img/block1img2.png") }}" alt="">
                </div>
            </div>
            <div class="card-btn">
                <button>Подробнее</button>
            </div>
        </section>

        <!--блок ассортимент-->
        <section class="assortment">
            <h3>Ассортимент</h3>
            <!--/*черный чай*/-->
            <div class="black_tea">
                <h4><span>—</span> Коллекция чернгого чая <span>—</span></h4>
                <div class="subparagraph1">
                    <img src="{{ asset("img/svg5.svg") }}" alt="">
                </div>
                <div class="wrapper1">
                    <div class="item1">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Кимун</p>
                    </div>
                    <div class="item2">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Эрл Грей</p>
                    </div>
                    <div class="item3">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Цейлонский</p>
                    </div>
                    <div class="item4">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Тонкая река</p>
                    </div>`
                </div>
                <div class="card-btn">
                    <button>Подробнее</button>
                </div>
            </div>
            <!--/*зеленный чай*/-->
            <div class="green_tea">
                <h4><span>—</span> Коллекция зеленного чая <span>—</span></h4>
                <div class="subparagraph2">
                    <img src="{{ asset("img/svg1.svg") }}" alt="">
                </div>
                <div class="wrapper2">
                    <div class="item1">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Ганпаудер</p>
                    </div>
                    <div class="item2">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Маофэн</p>
                    </div>
                    <div class="item3">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Сенча</p>
                    </div>
                    <div class="item4">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Матча</p>
                    </div>
                </div>
                <div class="card-btn">
                    <button>Подробнее</button>
                </div>
            </div>
            <!--/*Коллекция смешанного чая*/-->
            <div class="fusion_tea">
                <h4><span>—</span> Коллекция смешанного чая <span>—</span></h4>
                <div class="subparagraph3">
                    <img src="{{ asset("img/svg6.svg") }}" alt="">
                </div>
                <div class="wrapper3">
                    <div class="item1">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Витаминный</p>
                    </div>
                    <div class="item2">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Шанти-Йога</p>
                    </div>
                    <div class="item3">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Ку цяо хей</p>
                    </div>
                    <div class="item4">
                        <img src="{{ asset("img/block2img1.png") }}" alt="">
                        <p>Лао Сун</p>
                    </div>
                </div>
                <div class="card-btn">
                    <button>Подробнее</button>
                </div>
            </div>
            <!--/*конструктор*/-->
            <div class="konstructor">
                <div class="title1">
                    <p>TEA</p>
                </div>
                <div class="konstructor_info">
                    <p>
                    СОЗДАЙ СВОЙ СОБСТВЕННЫЙ <br>
                    <br>
                    И ВКУСНЫЙ ЧАЙ С ШАРИКАМИ
                    </p>
                    <img src="{{ asset("img/block2img2.png") }}" alt="">
                </div>
                <div class="title2">
                    <p>GROUNDS</p>
                </div>
            </div>
        </section>

        <!--блок Блог-->
        <section class="blog">
            <h3>Статьи</h3>
            <div class="container">
                <div class="item1_new">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <a href="">ВАЖНО ЗНАТЬ</a>
                    <p>Какой чай самый расслабляющий </p>
                    <div class="btn_link">
                        <a href="/about">Подробнее</a>
                    </div>
                </div>
                <div class="item2_new">
                    <img src="{{ asset("img/block4img2.png") }}" alt="">
                    <a href="">СОВЕТЫ ПОКУПАТЕЛЯМ</a>
                    <p>Что такое шириковый чай “Bubble tea” </p>
                    <div class="btn_link">
                        <a href="/about">Подробнее</a>
                    </div>
                </div>
                <div class="item3_new">
                    <img src="{{ asset("img/block4img3.png") }}" alt="">
                    <a href="">СОВЕТЫ ПОКУПАТЕЛЯМ</a>
                    <p>Какая рольза от зеленного чая</p>
                    <div class="btn_link">
                        <a href="/about">Подробнее</a>
                    </div>
                </div>
                <div class="item4_new">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <a href="">ВАЖНО ЗНАТЬ</a>
                    <p>Какой чай самый расслабляющий </p>
                    <div class="btn_link">
                        <a href="/about">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card-btn">
                <button>Подробнее</button>
            </div>
        </section>

        <!--блок Отзывы-->
        <section class="reviews">
            <h3>Отзывы</h3>
            <div class="container2">
                <div class="item1_rev">
                    <h5>Дмитрий Мазаев</h5>
                    <p>Я простой русский рабочий Дмитрий город москва люблю пить чай по старой русской традиции заварить
                    самовар любить ватрушки и бублик leaftea мой любимый магазин
                    </p>
                </div>
                <div class="item2_rev">
                    <h5>Дмитрий Мазаев</h5>
                    <p>Я простой русский рабочий Дмитрий город москва люблю пить чай по старой русской традиции заварить
                    самовар любить ватрушки и бублик leaftea мой любимый магазин
                    </p>
                </div>
                <div class="item3_rev">
                    <h5>Дмитрий Мазаев</h5>
                    <p>Я простой русский рабочий Дмитрий город москва люблю пить чай по старой русской традиции заварить
                    самовар любить ватрушки и бублик leaftea мой любимый магазин
                    </p>
                </div>
                <div class="item4_rev">
                    <h5>Дмитрий Мазаев</h5>
                    <p>Я простой русский рабочий Дмитрий город москва люблю пить чай по старой русской традиции заварить
                    самовар любить ватрушки и бублик leaftea мой любимый магазин
                    </p>
                </div>
            </div>
        </section>

        <!--блок Напишите нам-->
        <section class="napishite">
            <h3>Напишите нам</h3>
            <div class="container3">
                <div class="block_info">
                    <div class="text1">
                        <h6>Есть вопросы?</h6>
                        <p>Если возникают какие либо технические проблемы, у вас есть рекомендации к заявкам,
                        или же вы хотите получить рекомендации, то оставьте свои данные и мы обязательно свяжемся с вами.
                        </p>
                    </div>
                    <div class="text2">
                        <h6>Адрес:</h6>
                        <p>ул. Богдана Хмельницкого, 39, Астрахань, Астраханская обл., 414024</p>
                    </div>
                    <div class="text3">
                        <h6>Контактный телефон:</h6>
                        <p>+79029783511</p>
                    </div>
                    <div class="text4">
                        <h6>E-mail:</h6>
                        <p>ruteagrounds@gmail.com</p>
                    </div>
                </div>
                <form name="form" method="post">
                    <input name="name" type="text" placeholder="Введите имя">
                    <br>
                    <input name="email" type="text" placeholder="Введите телефон">
                    <br>
                    <input size="30" name="header" type="text" placeholder="Введите название темы" />
                    <br>
                    <textarea cols="32" name="message" rows="5" placeholder=" Введите сообщение"></textarea>
                    <br>
                    <button type="submit" class="">
                        {{ __('Отправить') }}
                    </button>
                </form>
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
                <p>Tea Grounds  ©  2022 Все права защищены</p>
            </div>
        </footer>
    </body>
</html>
