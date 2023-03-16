@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/history.css") }}">
</head>
<div class="navigation">
    <div class="navigation-f1">
        <li><a href="/" style="font-size:2.5vw;">Tea Grounds</a></li>
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
            <p>История заказов</p>
        </div>
        <div class="container7">
            <div class="top1">
                <div class="global1">
                    <h4>Товар доставлен</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>1820 ₽/350гр.</p>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global2">
                    <h4>Товар отменен</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global1">
                    <h4>Товар доставлен</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>1820 ₽/350гр.</p>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global2">
                    <h4>Товар отменен</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global1">
                    <h4>Товар доставлен</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>1820 ₽/350гр.</p>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global2">
                    <h4>Товар отменен</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global1">
                    <h4>Товар доставлен</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>1820 ₽/350гр.</p>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global2">
                    <h4>Товар отменен</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <p>260 ₽/50гр.</p>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </div>