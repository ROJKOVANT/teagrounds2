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
    <link rel="stylesheet" href="{{ asset("css/order.css") }}">
    <title>Корзина</title>
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
        @if(session()->has('message'))
        <div>
            <button type="button" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
        @endif
        <h3>Заказы</h3>

        <table class="table-block">
            <tr class="table-title">
                <th>ФИО</th>
                <th>Почта</th>
                <th>Адрес</th>
                <th>Изображение товара</th>
                <th>Название товара</th>
                <th>Кол-во товара</th>
                <th>Цена товара</th>
                <th>Оплата</th>
                <th>Статус</th>
                <th>Действие</th>
            </tr>
            @foreach($order as $el)
            <tr class="table-content">
                <th>{{$el->fio}}</th>
                <th>{{$el->email}}</th>
                <th>{{$el->address}}</th>
                <th><img src="{{$el->picture}}" style="height: 5vw; width: 5vw;" alt=""></th>
                <th>{{$el->towar_name}}</th>
                <th>{{$el->quantity}} шт.</th>
                <th>{{$el->price}} ₽/50гр.</th>
                <th>{{$el->payment_status}}</th>
                <th>{{$el->delivery_status}}</th>
                <th>
                    @if($el->delivery_status=="получен")
                    <p style="color: green">Завершен</p>
                    @else
                    @if($el->delivery_status=="пришел")
                    <p style="color: orange">Пришел</p>
                    @else
                    <form action="{{route('orders.index', ['id' => $el->id])}}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="delivery_status" class="input-form" value="{{$el->delivery_status}}">
                        </div>
                        <br>
                        <button type="submit" class="btn_top1">Обновить статус</button>
                    </form>
                    @endif
                    @endif
                </th>
            </tr>
            @endforeach
        </table>
    </section>

    <!--блок footer-->
    <footer>
        <ul class="navigation_footer">
            <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
            <li><a href="/about" class="link-effect">О нас</a></li>
            <li><a href="/shop" class="link-effect">Магазин</a></li>
            <li><a href="/blog" class="link-effect">Блог</a></li>
            <li><a href="" class="link-effect">Конструктор</a></li>
            <li><a href="/carts" class="link-effect">Корзина</a></li>
        </ul>
        <div class="conf">
            <a href="" class="link-effect">Политика конфидециальности</a>
        </div>
        <div class="cop">
            <p>Tea Grounds © 2022 Все права защищены</p>
        </div>
    </footer>
</body>

</html>
