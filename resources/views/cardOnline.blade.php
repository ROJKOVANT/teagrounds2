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
    <link rel="stylesheet" href="{{ asset("css/cardOnline.css") }}">
    <link rel="stylesheet" href="{{ asset("css/blog.css") }}">
    <title>Корзина</title>
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

<section class="paragraph">
    @if(session()->has('message'))
        <div>
            <button type="button" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
    @endif
    <h3>Оплата картой</h3>
        <div class="container">
            <h1>Donate to Our Cause</h1>
            <p>Your contribution will help us make a difference!</p>
            <form id="payment-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" id="amount" name="amount" placeholder="25.00" min="1" step="0.01">
                    </div>
                </div>
                <div class="form-group">
                    <label for="card-element">Credit or debit card</label>
                    <div id="card-element"></div>
                    <div id="card-errors" role="alert"></div>
                </div>
                <button type="submit" class="btn_top1_more1"
                        onclick="return confirm('Подтвердите свой заказ и мы получилим его.Ожидайте доставки!')">
                    Оплатить
                </button>
            </form>
        </div>
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
    <div class="conf">
        <a href="" class="link-effect">Политика конфидециальности</a>
    </div>
    <div class="cop">
        <p>Tea Grounds © 2022 Все права защищены</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
