@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset("css/adminBlog.css") }}">
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
        <li><a href="/orders">Заказы</a></li>
        <li><a href="/helpReview">Запросы</a></li>
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
            <p>Статьи</p>
        </div>
    @php
        $news = \App\Models\News::all();
    @endphp
{{--Товары--}}
        <div class="container1">
            @foreach($news as $el)
            <div class="card">
                <img src="{{$el->picture}}" alt="">
                <div class="card-content">
                    <div class="card-title">
                        <h4>{{$el->paragraph->name}}</h4>
                    </div>
                    <p class="card-text">{{$el->title}}</p>
                    <div class="btn_top1">
                        <a href="{{route('news.index', ['id'=> $el->id])}}"><button class="btn_top1_more1">Подробнее</button></a>
                    </div>
                    <div class="btn_top1">
                        <a href="{{route('news.edit', ['id'=> $el->id])}}"><button class="btn_top1_more1">Изменить статью</button></a>
                    </div>
                    <div class="btn_top1">
                        <a href="{{route('adminBlog.delete', ['id'=> $el->id])}}"><button class="btn_top1_more1">Удалить статью</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
