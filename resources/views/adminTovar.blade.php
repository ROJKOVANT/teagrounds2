@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/adminTovar.css") }}">
</head>
<div class="navigation">
    <div class="navigation-f1">
        <li><a href="/" style="font-size:2.5vw;">Tea Grounds</a></li>
    </div>

    <div class="navigation-f2">
        <li><a href="admin">Клиенты</a></li>
        <li><a href="adminTovarAdd">Добавить товар</a></li>
        <li><a href="adminTovar">Товары</a></li>
        <li><a href="adminBlogAdd">Добавить статью</a></li>
        <li><a href="adminBlog">Статьи</a></li>
    </div>

    <div class="navigation-f4">
        <li><a href="">Запросы</a></li>
        <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}</a>
        </li>
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
            <p>Товары</p>
        </div>

        <!--Клиенты-->
        <div class="container7">
            <div class="top1">
                <div class="global1">
                    <h4>Карточка товара</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Удалить товар</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global2">
                    <h4>Карточка товара</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Удалить товар</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global1">
                    <h4>Карточка товара</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Удалить товар</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global2">
                    <h4>Карточка товара</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Удалить товар</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global1">
                    <h4>Карточка товара</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Удалить товар</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global2">
                    <h4>Карточка товара</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Удалить товар</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global1">
                    <h4>Карточка товара</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Удалить товар</button>
                    </div>
                </div>
            </div>
            <div class="top1">
                <div class="global2">
                    <h4>Карточка товара</h4>
                    <img src="{{ asset("img/angliiskiisadovnik1.png") }}" alt="">
                    <h5>Английский Садовник</h5>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Подробнее</button>
                    </div>
                    <div class="btn_top2">
                        <button class="btn_top2_more2">Удалить статью</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
