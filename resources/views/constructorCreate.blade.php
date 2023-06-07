<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/constructorCreate.css") }}">
    <title>Конструктор</title>
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

{{--Блок экран приведствия--}}
@php
    $towarsall = \App\Models\Towar::all()
@endphp
<section class="paragraph">
    <h3>Выберите набор</h3>
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <form action="{{route('constructorCreate')}}" method="post">
        @csrf
        <div class="present">
            <div class="box">
                <img src="img/image 33.png" alt="">
                <label class="name" for="">Пластиковый пакет <br> на бумажной основе</label>
                <input name="box" type="radio" value="1" required>
            </div>
            <div class="box">
                <img src="img/image 37.png" alt="">
                <label class="name" for="">Бумажные обечайки  <br> на малый набор</label>
                <input name="box" type="radio" value="2" required>
            </div>
            <div class="box">
                <img src="img/image 35.png" alt="">
                <label class="name" for="">Бумажные обечайки  <br> на средние набор</label>
                <input name="box" type="radio" value="3" required>
            </div>
            <div class="box">
                <img src="img/image 36.png" alt="">
                <label class="name" for="">Бумажные обечайки  <br> на большой набор</label>
                <input name="box" type="radio" value="4" required>
            </div>
        </div>
        <h3>Выберите товар</h3>
        <div class="container7">
            @foreach($towarsall as $towars)
                <div class="top1">
                    <div class="global1">
                        <img src="{{$towars->picture}}" alt="">
                        <h5>{{$towars->name}}</h5>
                        <p>{{$towars->price}} ₽/50гр.</p>
                    </div>
                    <div class="btn_top1">
                        <a href="{{route('OpenTovar', ['id'=> $towars->id])}}"><button class="btn_top1_more1">Подробнее</button></a>
                            <input class="add_tovar" type="checkbox" name="products[]" value="{{ $towars->id}}">
                    </div>
                </div>
            @endforeach
        </div>
        <h3>Выберите открытку</h3>
        <div class="present">
            <div class="box">
                <img src="img/ot1.png" alt="">
                <label class="name" for="">Открытка 1</label>
                <input name="letter" type="radio" value="1" required>
            </div>
            <div class="box">
                <img src="img/ot2.png" alt="">
                <label class="name" for="">Открытка 2</label>
                <input name="letter" type="radio" value="2" required>
            </div>
            <div class="box">
                <img src="img/ot3.png" alt="">
                <label class="name" for="">Открытка 3</label>
                <input name="letter" type="radio" value="3" required>
            </div>
            <div class="box">
                <img src="img/ot4.png" alt="">
                <label class="name" for="">Открытка 4</label>
                <input name="letter" type="radio" value="4" required>
            </div>
        </div>
        <h3>Оплатите заказ</h3>
        <div class="data">
                <div class="table">
                    <label for="devil">Введите свой номер телефона</label>
                    <input type="tel" name="phone" required
                           placeholder="+7 (900) 123-45-67" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"/>
                </div>
                <div class="table2">
                    <div  class="table">
                        <label for="devil">Выберите тип доставки товара</label>
                        <input type="text" name="devil" list="devils" required >
                        <datalist id="devils">
                            <option value="забрать из магазина"/>
                            <option value="доставка на дом"/>
                        </datalist>
                    </div>
                    <div  class="table">
                        <label for="address">Выберите адресс доставки </label>
                        <div class="sd">
                            <input type="text" name="address" list="address" required >
                            <select id="address">
                                <option value="ул.Полесская, 12">забрать из магазина</option>
                                <option value="Введите адресс">доставка на дом</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="buy">
                    <button type="submit" class="btn_top1_more1"
                            onclick="return confirm('Подтвердите свой заказ и мы получилим его.Ожидайте доставки!')">
                        Оплата наличными
                    </button>
                </div>
        </div>
    </form>
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
<script src="{{asset('js/devil.js')}}"></script>
<script src="{{asset('js/adress.js')}}"></script>
<script src="{{asset('js/buttonUp.js')}}"></script>
<script src="{{asset('js/burgerMenu.js')}}"></script>
</body>
</html>
