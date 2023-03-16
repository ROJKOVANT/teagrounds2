@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/help.css") }}">
</head>
<div class="navigation">
    <div class="navigation-f1">
        <li class="log"><a href="/">Tea Grounds</a></li>
    </div>

    <div class="navigation-f2">
        <li><a href="/about">О нас</a></li>
        <li><a href="/shop">Магазин</a></li>
        <li><a href="/blog">Блог</a></li>
        <li><a href="">Конструктор</a></li>
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
            <p>Помощь</p>
        </div>
        <!-- блок FAQ-->
        <div class="info">
            <p>Часто задаваемые вопросы</p>
            <div class="block">
                <details>
                    <summary>Какие возможны способы оплаты?</summary>
                    <div>
                    Оплатить заказ можно на сайте любым удобным для вас способом: банковская карта или перевод, оплата на электронный кошелек, 
                    оформление кредита и рассрочки. Также возможна оплата наличными при получении заказа.
                    Будьте внимательны! Способ оплаты может быть недоступен для некоторых видов доставки или региона.
                    </div>
                </details>
                <details>
                    <summary>Возможен ли самовывоз заказанного товара?</summary>
                    <div>
                    Да, возможен.  Для этого, при оформлении заказа выберете адрес удобного для Вас магазина. 
                    После чего менеджер свяжется с Вами для детального обсуждения заказа и времени, в которое его можно будет забрать.
                    </div>
                </details>
                <details>
                    <summary>Как осуществляется доставка в регионы?</summary>
                    <div>
                    Предусмотрено несколько вариантов доставки: транспортные компании, курьерская доставка и почта России.
                    Вы можете выбрать любой удобный для вас способ и указать желаемую дату доставки. 
                    Оплата рассчитывается автоматически при указании региона и даты.
                    </div>
                </details>
            </div>
        </div>
        <!-- блок Form-->
        <div class="card">
            <p>Задайте нам свой вопрос</p>
            <div class="card-info">
                <form name="form" method="">
                    <input name="name" type="text" placeholder="Введите имя">
                    <br>
                    <input name="email" type="text" placeholder="Введите почту">
                    <br>
                    <input size="30" name="header" type="text" placeholder="Введите название вопроса" />
                    <br>
                    <textarea cols="32" name="message" rows="5" placeholder="Введите сообщение"></textarea>
                    <br>
                    <button type="submit" class="">Отправить</button>
                </form>
            </div>
        </div>
    </div>