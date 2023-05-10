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
    <link rel="stylesheet" href="{{ asset("css/about.css") }}">
    <title>О нас</title>
</head>

<body>
    <!--блок шапка-->
    <!--блок шапка-->
    <header>
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
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <!--блок О нас-->
    <section class="about">
        <div class="title1">
            <p>TEA</p>
        </div>
        <h3>О нас</h3>
        <div class="info">
            <div class="text_one">
                <p>
                    Tea Grounds — был основан
                    на стремлении установить
                    стандарт качества и
                    расширить представление
                    о чае и его богатых,
                    вдохновляющих традициях.
                </p>
                <img src="{{ asset("img/block1img1.png") }}" alt="">
            </div>
            <div class="separation"></div>
            <div class="text_two">
                <p>
                    20 лет мы занимаемся чаем.
                    Из самых популярных
                    запросов мы составили
                    тематические подборки.
                    Ищите и находите нужный
                    чай для разных ситуаций.
                </p>
                <img src="{{ asset("img/block1img2.png") }}" alt="">
            </div>
        </div>
        <div class="title2">
            <img src="{{ asset("img/svg1.svg") }}" alt="">
            <p>GROUNDS</p>
        </div>
    </section>

    <!--блок Почему именно мы-->
    <section class="about_we">
        <h3>Почему именно мы</h3>
        <div class="text_three">
            <p>
                Все знают, что чай - это не только самый популярный напиток в мире, но
                и неизменный спутник здорового образа жизни миллионов людей. Выбор
                надежного спутника (пусть даже это будет пакетик чая) - это задача не
                из легких. Мы рекомендуем Вам обратиться к нашим продавцам-
                консультантам и они помогут Вам подобрать именно тот сорт чая,
                который подходит только для Вас и отвечает Вашему изысканному вкусу.
                Мы предлагаем чай и растительные ингредиенты, импортированные
                непосредственно из садов по всему миру.
            </p>
            <img src="{{ asset("img/svg2.svg") }}" alt="">
        </div>
    </section>

    <!--блок Как нас найти-->
    <section class="find_us">
        <h3>Как нас найти</h3>
        <div class="info_where_we">
            <div>
                <p>Тел: 89029534311</p>
                <p>Почта: TeaGrounds@gmail.com</p>
                <p>Адрес: г.Астрахань ул.Полесская, 12</p>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.4294585956454!2d48.10855864877767!3d46.352259052455736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41a90527b62b9069%3A0x4019977fa49017ad!2z0J_QvtC70LXRgdGB0LrQuNC5INC_0LXRgC4sIDEyLCDQkNGB0YLRgNCw0YXQsNC90YwsINCQ0YHRgtGA0LDRhdCw0L3RgdC60LDRjyDQvtCx0LsuLCA0MTQwMTE!5e0!3m2!1sru!2sru!4v1668844120280!5m2!1sru!2sru" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="info_where_img">
            <img class="up-img" src="{{ asset("img/svg3.svg") }}" alt="">
            <img class="up-img2" src="{{ asset("img/svg4.svg") }}" alt="">
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
