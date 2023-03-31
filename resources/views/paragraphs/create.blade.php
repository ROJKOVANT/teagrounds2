@extends('layouts.app')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset("css/paragraphIndex.css") }}">
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
                <p>Новая категория</p>
            </div>
            <!--Категории-->
            @if(count($errors)>0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            @endif

            <form action="{{route('paragraph.store')}}" method="POST">
                @csrf
                <div>
                    <label for="name" class="label-form">Введите категории</label>
                    <br>
                    <input type="text" name="name" class="input-form" placeholder="Введите название категории">
                </div>
                <button type="submit" class="btn_top1">Создать категорию</button>
            </form>
        </div>
    </div>
    </div>
