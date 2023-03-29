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
                <p>Редактирование</p>
            </div>
        @php
            $newses = \App\Models\News::all();
            $paragraphs = \App\Models\Paragraph::all();
        @endphp
            <!--статья-->
            <div class="container7">
                <form action="{{route('news.update', ['id' => $news->id])}}" method="POST">
                    @csrf
                    <div>
                        <label for="paragraph_id" class="label-form">Измените категорию</label><br>
                        <select name="paragraph_id" id="paragraph">
                            @foreach($paragraphs as $paragraph)
                                <option value="{{$paragraph->id}}">{{$paragraph->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="subject" class="label-form">Измените  название темы</label>
                        <br>
                        <textarea type="text" name="subject" id="subject" class="textarea-form" cols="40" rows="2.5">{{$news->subject}}</textarea>
                    </div>
                    <div>
                        <label for="title" class="label-form">Измените  название заголовка</label>
                        <br>
                        <textarea type="text" name="title" id="title" class="textarea-form" cols="80" rows="15">{{$news->title}}</textarea>
                    </div>
                    <div>
                        <label for="content1" class="label-form">Измените  название контента-1</label>
                        <br>
                        <textarea type="text" name="content1" id="content1" class="textarea-form" cols="80" rows="15">{{$news->content1}}</textarea>
                    </div>
                    <div>
                        <label for="picture" class="label-form">Измените картинку</label>
                        <br>
                        <input type="file" name="picture" class="input-file">
                    </div>
                    <div>
                        <label for="content2" class="label-form">Измените  название контента-2</label>
                        <br>
                        <textarea type="text" name="content2" id="content2" class="textarea-form" cols="80" rows="15">{{$news->content2}}</textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn_top1">Обновить статью</button>
                </form>
            </div>
        </div>
    </div>
