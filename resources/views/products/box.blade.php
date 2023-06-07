@extends('layouts.app')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset("css/box.css") }}">
    </head>
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
                @switch($gifts->box_type)
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
            </div>

            <!--Клиенты-->
            <div class="container7">
                <p>Информация о заказе</p>
                <table class="table-block">
                    <tr class="table-title">
                        <th>Изображение товара</th>
                        <th>Название товара</th>
                        <th>Товары</th>
                        <th>Цена товара</th>
                        <th>Оплата</th>
                        <th>Статус</th>
                    </tr>
                    <tr class="table-content">
                        <th>@switch($gifts->box_type)
                                @case('1')
                                <img class="box" src="/img/image 33.png" alt="">
                                @break

                                @case('2')
                                <img class="box" src="/img/image 37.png" alt="">
                                @break

                                @case('3')
                                <img class="box" src="/img/image 35.png" alt="">
                                @break

                                @case('4')
                                <img class="box" src="/img/image 36.png" alt="">
                                @break
                            @endswitch
                        </th>
                        <th>@switch($gifts->box_type)
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
                            @endswitch</th>
                        <th>
                            @foreach( $gifts->products as $product)
                                <a href="{{route('OpenTovar', ['id'=> $product->id])}}">{{ $product->name}}<br></a>
                            @endforeach
                        </th>
                        <th>{{$gifts->price}} ₽</th>
                        <th>{{$gifts->payment_status}}</th>
                        <th>{{$gifts->delivery_status}}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
