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
    <link rel="stylesheet" href="{{ asset("css/OpenTovar.css") }}">
    <title>Манговый сок чай</title>
</head>

<body>
<!--блок шапка-->
<header>
    @php
        use Illuminate\Support\Facades\Auth;
        use App\Models\Cart;

        $count_cart = Cart::where('user_id', Auth::user()->id)->get();
        $count = 0;
        for ($i=0; $i < count($count_cart); $i++)
        {
            $count +=$count_cart[$i]['quantity'];
        }
    @endphp
    <div class="navbar">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <ul class="navigation">
            <li class="nav-item"><a href="/about" class="link-effect">О нас</a></li>
            <li class="nav-item"><a href="/shop" class="link-effect">Магазин</a></li>
            <li class="nav-item"><a href="/blog" class="link-effect">Блог</a></li>
            <li class="nav-item"><a href="/constructor" class="link-effect">Конструктор</a></li>
            <li class="nav-item"><a href="/carts" class="link-effect">Корзина{{$count}}</a></li>
            <li class="nav-item"><a href="/register">
                    @auth
                        {{ Auth::user()->name }}
                    @endauth

                    @guest
                        Войти
                    @endguest
                </a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</header>

    <section class="open_tovar">
        <h1>{{$towars->name}}</h1>
        <div class="tovar_product">
            <div class="tovar_img">
                <img src="{{$towars->picture}}" alt="">
            </div>
            <div class=" tovar_info">
                <div class="cont1">
                    <h4>{{$towars->name}}</h4>
                    <p>{{$towars->title}}</p>
                </div>
                <div class="cont2">
                    <h4>Состав</h4>
                    <p>{{$towars->compound}}</p>
                </div>
                <div class="cont3">
                    <ul class="link1">
                        <h4>Страна / Регион</h4>
                        <p>{{$towars->country}}</p>
                    </ul>
                    <ul class="link1">
                        <h4>Вид </h4>
                        <p>{{$towars->view}}</p>
                    </ul>
                    <ul class="link1">
                        <h4>Вкус</h4>
                        <p>{{$towars->taste}}</p>
                    </ul>
                </div>
            </div>
            <div class=" price_info">
                <div class="contprice1">
                    <p>{{$towars->price}} ₽ / 50гр.</p>
                </div>
                <div class="contprice2">
                    <p>кол-во / {{$towars->count}}шт.</p>
                </div>
                <div class="btn_top1">
                    <form action="{{url('add_cart',$towars->id)}}" method="Post">
                        @csrf
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit" class="btn_top1_more1">Добавить</button>
                    </form>
                </div>
                <div class=" info_price">
                    <p>Цена действительна только для интернет-магазина
                        и может отличаться от цен в розничных магазинах !</p>
                </div>
            </div>
        </div>
    </section>

    <section class="paragraph">
        <div class="faq-content">
            <div class="faq-question">
                <input id="q1" type="checkbox" class="panel">
                <label for="q1" class="panel-title">Описание</label>
                <div class="panel-content">
                    <p>
                        {{$towars->description}}
                    </p>
                </div>
            </div>

            <div class="faq-question">
                <input id="q2" type="checkbox" class="panel">
                <label for="q2" class="panel-title">Как хранить чай</label>
                <div class="panel-content">
                    <p>
                        Старайтесь хранить чай в герметичной емкости, при небольшой влажности и без воздействия прямого солнечного света. Если не
                        соблюдать условия хранения, чай со временем станет блеклым, неинтересным и несбалансированным. Обратите особое внимание на
                        посторонние запахи. Сухой чайный лист очень быстро пропитывается сторонними ароматами - не хрфаните чая вместе с сильно пахнущими
                        продуктами. Мы продаем чай в крафт-пакетиках. И хотя их внутренний слой состоит из фольги, что позволяет чаю храниться дольше, мы
                        рекомендуем выпивать такой чай в течение 2 недель. Если вы хотите хранить чай дольше, пересыпьте его в емкость
                        (металлизированный пакет с герметичным клапаном).
                    </p>
                </div>
            </div>

            <div class="faq-question">
                <input id="q3" type="checkbox" class="panel">
                <label for="q3" class="panel-title">Как заваривать чай</label>
                <div class="panel-content">
                    <h4>
                        КЛАССИЧЕСКОЕ ЗАВАРИВАНИЕ
                    </h4>
                    <p>
                        1. время заваривания — 3-5 мин; <br>
                        2. температура заваривания - 90-95 °C; <br>
                        3. порция на 1 чашку — 3-5 г; <br>
                        4. кол-во завариваний — 2; <br>
                        5. в чем заваривать чай — керамический или фарфоровый чайник, стеклянный чайник;
                    </p>
                    <h4>
                        ЗАВАРИВАНИЕ ПРОЛИВАМИ
                    </h4>
                    <p>
                        1. время заваривания — от 10 сек до 1 мин; <br>
                        2. температура заваривания - 90-95 °C; <br>
                        3. порция на 1 цикл — 3 г; <br>
                        4. кол-во проливов — 3; <br>
                        5. в чем заваривать чай — керамический или фарфоровый чайник, стеклянный чайник; <br>
                        <br>
                        Проливы —  это метод заваривания чая короткими настаиваниями одной заварки от 10 секунд до 1 минуты. При таком способе заваривания
                        вкусо-ароматические вещества выделяются в настой постепенно, и вы можете наблюдать как меняется вкус и аромат напитка от пролива к
                        проливу, открывать для себя новые грани любимого чая. В Китае этот процесс называется «любоваться мелодией чая». Для заваривания
                        проливами лучше использовать гайвань или небольшой, лучше глиняный, заварочный чайник.
                    </p>
                </div>
            </div>

            <div class="faq-question">
                <input id="q4" type="checkbox" class="panel">
                <label for="q4" class="panel-title">Как оплатить</label>
                <div class="panel-content">
                    <h4>
                        Оплачивайте покупки удобным способом. В интернет-магазине доступно 2 варианта оплаты:
                    </h4>
                    <p>
                       1. наличные при самовывозе или доставке курьером. Специалист свяжется с вами в день доставки, чтобы уточнить время и заранее
                        подготовить сдачу с любой купюры. Вы подписываете товаросопроводительные документы, вносите денежные средства, получаете товар и чек.
                    </p>
                    <p>
                        2. безналичный расчет при самовывозе или оформлении в интернет-магазине: карты Visa и MasterCard. Чтобы оплатить покупку,
                        система перенаправит вас на страницу платежного сервиса. Здесь необходимо заполнить форму по инструкции.
                    </p>
                </div>
            </div>
        </div>
        <a href="#" class="go-top"><img src="{{asset('img/upbtn.png')}}" alt=""></a>
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
    <script src="{{asset('js/buttonUp.js')}}"></script>
    <script src="{{asset('js/burgerMenu.js')}}"></script>
</body>
</html>
