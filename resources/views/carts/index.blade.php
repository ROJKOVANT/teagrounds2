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
    <link rel="stylesheet" href="{{ asset("css/cart.css") }}">
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
        <h3>Корзина</h3>

        <table class="table-block">
            <tr class="table-title">
                <th>Изображение товара</th>
                <th>Название товара</th>
                <th>Кол-во товара</th>
                <th>Цена товара</th>
                <th>Действие</th>
            </tr>

            <?php
            $totalprice = 0;
            ?>

            @foreach( $cart as $cart)
            <tr class="table-content">
                <th><img src="{{$cart->picture}}" style="height: 5vw; width: 5vw;" alt=""></th>
                <th>{{$cart->towar_name}}</th>
                <th>{{$cart->quantity}} шт.</th>
                <th>{{$cart->price}} ₽/50гр.</th>
                <th>
                    <a onclick=" return confirm('Вы действительно хотите удалить данный товар?')" href="{{route('carts.delete', ['id'=> $cart->id])}}">X</a>
                </th>
            </tr>
            <?php
            $totalprice = $totalprice + $cart->price;
            ?>
            @endforeach
        </table>
        <div class="order">
            <h1> Оформление заказa</h1>
        </div>
        <div class="data">
            <div class="itog">
                <h2>Итоговая сумма заказа : {{$totalprice}} ₽</h2>
            </div>
            <div class="address">
                <form action="{{route('cash_order')}}" method="P0ST">
                    @csrf
                    @method('patch')
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
                            <input type="text" name="address" list="address" required >
                            <select id="address">
                                <option selected value="ул.Полесская, 12">забрать из магазина</option>
                                <option  value="Введите адресс">доставка на дом</option>
                            </select>
                        </div>
                    </div>
                    <div class="buy">
                        <button type="submit" class="btn_top1_more1"
                                onclick="return confirm('Подтвердите свой заказ и мы получилим его.Ожидайте доставки!')">
                                Оплата наличными
                        </button>
                        <button class="btn_top1_more1"><a href="/cardOnline">Оплата картой</a></button>
                    </div>
                </form>
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
    <script src="{{asset('js/devil.js')}}"></script>
    <script src="{{asset('js/adress.js')}}"></script>
    <script src="{{asset('js/burgerMenu.js')}}"></script>
</body>
</html>
