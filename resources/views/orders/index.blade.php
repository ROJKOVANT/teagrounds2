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
    <link rel="stylesheet" href="{{ asset("css/constructor.css") }}">
    <title>Корзина</title>
</head>

<body>
<!--блок шапка-->
<!--блок шапка-->
<!--блок шапка-->
<header>
    <div class="navbar">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <ul class="navigation">
            <li class="nav-item"><a href="adminTovar" class="link-effect">Товары</a></li>
            <li class="nav-item"><a href="adminBlog" class="link-effect">Статьи</a></li>
            <li class="nav-item"><a href="/orders" class="link-effect">Заказы</a></li>
            <li class="nav-item"><a href="/podaroc" class="link-effect">Наборы</a></li>
            <li class="nav-item"><a href="/helpReview" class="link-effect">Запросы</a></li>
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
        <h3>Заказы</h3>

        <table class="table-block">
            <tr class="table-title">
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Тип доставки</th>
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
                <th>{{$el->phone}}</th>
                <th>{{$el->devil}}</th>
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
                        @method('PATCH')
                        <div>
                            <input type="text" name="delivery_status" list="delivery_statuses" class="input-form" value="{{$el->delivery_status}}">
                            <datalist id="delivery_statuses">
                                <option value="в обработке"/>
                                <option value="передан курьеру"/>
                                <option value="пришел"/>
                            </datalist>
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
    <nav class="navbar">
        <li class="logo"><a href="/" class="link-effect">Tea Grounds</a></li>
        <ul class="navigation">
            <li class="nav-item"><a href="adminTovar" class="link-effect">Товары</a></li>
            <li class="nav-item"><a href="adminBlog" class="link-effect">Статьи</a></li>
            <li class="nav-item"><a href="/orders" class="link-effect">Заказы</a></li>
            <li class="nav-item"><a href="/podaroc" class="link-effect">Наборы</a></li>
            <li class="nav-item"><a href="/helpReview" class="link-effect">Запросы</a></li>
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
    </nav>
    <div class="conf">
        <a href="">Политика конфидециальности</a>
    </div>
    <div class="cop">
        <p>Tea Grounds © 2022 Все права защищены</p>
    </div>
</footer>
</body>

</html>
