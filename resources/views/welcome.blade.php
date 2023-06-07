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

<body>
<!--блок шапка-->
<header>
    @php
        use Illuminate\Support\Facades\Auth;
        use App\Models\Cart;
        if(Auth::user()){
            $count_cart = Cart::where('user_id', Auth::user()->id)->get();
            $count = 0;
            for ($i=0; $i < count($count_cart); $i++)
            {
                $count +=$count_cart[$i]['quantity'];
            }
        }
    @endphp
    <div class="navbar">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <ul class="navigation">
            <li class="nav-item"><a href="/about" class="link-effect">О нас</a></li>
            <li class="nav-item"><a href="/shop" class="link-effect">Магазин</a></li>
            <li class="nav-item"><a href="/blog" class="link-effect">Блог</a></li>
            <li class="nav-item"><a href="/constructor" class="link-effect">Конструктор</a></li>
            <li class="nav-item"><a href="/carts" class="link-effect">
                    @auth
                        Корзина {{$count}}
                    @endauth

                    @guest
                        Корзина
                    @endguest
                </a>
            </li>
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

<!--блок логотип-->
<section class="under_header">
    <div class="logotip">
        <img src="{{ asset("img/logotip.svg") }}" alt="">
    </div>
</section>

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

<!--блок каталог-->
<section class="new">
    @php
        $randomTowars = App\Models\Towar::get()->random(4);
    @endphp
    <h3>Новые товары</h3>
    <div class="wrappe2">
        @foreach($randomTowars as $towars)
            <div class="to1">
                <div class="globa1">
                    <img src="{{$towars->picture}}" alt="">
                    <h5>{{$towars->name}}</h5>
                    <p>{{$towars->price}} ₽/50гр.</p>
                </div>
                <div class="btn_to1">
                    <a href="{{route('OpenTovar', ['id'=> $towars->id])}}"><button class="btn_to1_more1">Подробнее</button></a>
                    <form action="{{url('add_cart',$towars->id)}}" method="Post">
                        @csrf
                        <input class="in1" type="number" name="quantity" value="1" min="1">
                        <button type="submit" class="btn_to1_more1">Добавить</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!--блок Блог-->
<section class="news_more">
    @php
        $randomNewses = App\Models\News::get()->random(4);
    @endphp
    <h3>Статьи</h3>
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
    <a href="#" class="go-top"><img src="{{asset('img/upbtn.png')}}" alt=""></a>
</section>

<!--блок Отзывы-->
<section class="reviews">
    <h3>Отзывы</h3>
    <div class="container2">
        @foreach($randomReviews as $it)
            <div class="rev">
                <h5>{{$it->fio}}</h5>
                <p>{{$it->site_review}}</p>
            </div>
        @endforeach
    </div>
</section>

<!--блок Напишите нам-->
<section class="napishite">
    <h3>Напишите нам</h3>
    <div class="container3">
        <div class="block_info">
            <div class="text">
                <h6>Есть вопросы?</h6>
                <p>Если возникают какие либо технические проблемы, у вас есть рекомендации к заявкам,
                    или же вы хотите получить рекомендации, то оставьте свои данные и мы обязательно свяжемся с вами.
                </p>
            </div>
            <div class="text">
                <h6>Адрес:</h6>
                <p>ул. Богдана Хмельницкого, 39, Астрахань, Астраханская обл., 414024</p>
            </div>
            <div class="text">
                <h6>Контактный телефон:</h6>
                <p>+79029783511</p>
            </div>
            <div class="text">
                <h6>E-mail:</h6>
                <p>ruteagrounds@gmail.com</p>
            </div>
        </div>
        <form name="{{route('welcome')}}" method="Post">
            @csrf
            <input name="name" type="text" placeholder="Введите имя" required>
            <br>
            <input name="email" type="text" placeholder="Введите почту" required>
            <br>
            <input size="30" name="header" type="text" placeholder="Введите название темы" required/>
            <br>
            <textarea name="message" placeholder="Введите сообщение" cols="40" rows="15" required></textarea>
            <br>
            <div class="block">
                <input type="checkbox" name="rules" class="check" required>
                <p class="check-p">Вы соглашаетесь на обработку данных</p>
            </div>
            <button type="submit" class="btn_top1">Отправить</button>
        </form>
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
