<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/product.css") }}">
    <title>Document</title>
</head>
<body>
<div class="navigation">
    @php
        use Illuminate\Support\Facades\Auth;
        use App\Models\Cart;

        $count_cart = Cart::where('user_id', Auth::user()->id)->get();
        $count = 0;
        for ($i=0; $i < count($count_cart); $i++)
        {
            $count +=$count_cart[$i]['quantity'];
        }
         $gifts = \App\Models\Gift::where('user_id', Auth::user()->id)->where('delivery_status','=', 'получен')->get();
    @endphp
    <div class="navigation-f1">
        <li class="log"><a href="/">Tea Grounds</a></li>
    </div>
    <div class="navigation-f2">
        <li><a href="/about">О нас</a></li>
        <li><a href="/shop">Магазин</a></li>
        <li><a href="/blog">Блог</a></li>
        <li><a href="/constructor">Конструктор</a></li>
        <li><a href="/carts" class="link-effect">Корзина{{$count}}</a></li>
    </div>

    <div class="navigation-f3">
        <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}</a>
        </li>
        <li><a href="/product">Заказы</a></li>
        <li><a href="/history">История заказов</a></li>
    </div>

    <div class="navigation-f4">
        <li><a href="/help">Помощь</a></li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Выход') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </div>
</div>
<div class="d-f">
    <div class="container">
        <div class="point">
            <p>История заказов</p>
        </div>
        <div class="container1">
            @foreach($order as $el)
                <div class="card">
                    <h4 class="card-title">Товар {{$el->delivery_status}}</h4>
                    <img src="{{$el->picture}}" alt="">
                    <p class="card-text">{{$el->towar_name}}</p>
                    <p class="card-text">{{$el->price}} ₽/50гр.</p>
                    <p class="card-text">{{$el->payment_status}}</p>
                    <div class="btn_top1">
                        <a href="{{route('products.more', ['id'=> $el->id])}}"><button class="btn_top1_more1">Подробнее о заказе</button></a>
                    </div>
                </div>
            @endforeach
            @foreach($gifts as $eli)
                <div class="card">
                    <h4 class="card-title">Товар {{$eli->delivery_status}}</h4>
                    <img src="{{$eli->picture}}" alt="">
                    @switch($eli->box_type)
                        @case('1')
                        <p class="card-text">Пластиковый пакет на бумажной основе</p>
                        @break

                        @case('2')
                        <p class="card-text">Бумажные обечайки на малые коробки</p>
                        @break

                        @case('3')
                        <p class="card-text">Бумажные обечайки на средние коробки</p>
                        @break

                        @case('4')
                        <p class="card-text">Бумажные обечайки на большие коробки</p>
                        @break
                    @endswitch
                    <p class="card-text">{{$eli->price}} ₽/50гр.</p>
                    <p class="card-text">{{$eli->payment_status}}</p>
                    <div class="btn_top1">
                        <a href="{{route('box', ['id'=> $eli->id])}}"><button class="btn_top1_more1">Подробнее о заказе</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>

