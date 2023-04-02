@extends('layouts.app')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset("css/adminBlogAdd.css") }}">
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
                <p>Добавить новость</p>
            </div>
            <!--Клиенты-->
            <div class="container7">
                <li>
                    <a href="paragraphs">Список категорий</a>
                </li>
                <form action="{{route('adminBlogAdd.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="paragraph" class="label-form">Выберите категорию</label><br>
                        <select name="paragraph_id" id="paragraph">
                            @foreach($paragraphs as $paragraph)
                                <option value="{{$paragraph->id}}">{{$paragraph->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="subject" class="label-form">Введите тему</label>
                        <br>
                        <textarea name="subject" class="textarea-form" placeholder="Введите тему" cols="40" rows="2.5"></textarea>
                    </div>
                    <div>
                        <label for="title" class="label-form">Введите заголовок</label>
                        <br>
                        <textarea name="title" class="textarea-form" placeholder="Введите заголовок" cols="80" rows="15"></textarea>
                    </div>
                    <br>
                    <div>
                        <label for="content1" class="label-form">Введите первое описание</label>
                        <br>
                        <textarea name="content1" class="textarea-form" placeholder="Введите описание" cols="80" rows="15"></textarea>
                    </div>
                    <div>
                        <label for="picture" class="label-form">Загрузите картинку</label>
                        <br>
                        <input type="file" name="picture" class="input-file">
                    </div>
                    <div>
                        <label for="content2" class="label-form">Введите второе описание</label>
                        <br>
                        <textarea name="content2" class="textarea-form" placeholder="Введите описание" cols="80" rows="15"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn_top1">Загрузить статью</button>
                </form>
            </div>
        </div>
    </div>
