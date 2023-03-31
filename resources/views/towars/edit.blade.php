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
            $category = \App\Models\Category::all();
        @endphp
        <!--статья-->
            <div class="container7">
                <form action="{{route('towars.update', ['id' => $towars->id])}}" method="POST">
                    @csrf
                    <div>
                        <label for="category_id" class="label-form">Измените категорию</label><br>
                        <select name="category_id" id="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="name" class="label-form">Измените название чая</label>
                        <br>
                        <textarea name="name" class="textarea-form" placeholder="Введите название чая" cols="40" rows="2.5">{{$towars->name}}</textarea>
                    </div>
                    <div>
                        <label for="picture" class="label-form">Измените картинку</label>
                        <br>
                        <input type="file" name="picture" class="input-file">
                    </div>
                    <div>
                        <label for="title" class="label-form">Измените заголовок о чае</label>
                        <br>
                        <textarea name="title" class="textarea-form" placeholder="Введите название чая" cols="40" rows="10">{{$towars->title}}</textarea>
                    </div>
                    <br>
                    <div>
                        <label for="compound">Измените состав чая</label>
                        <br>
                        <textarea name="compound"  class="textarea-form" placeholder="Введите описание" cols="40" rows="10">{{$towars->compound}}</textarea>
                    </div>
                    <div>
                        <label for="country">Измените страну чая</label>
                        <br>
                        <textarea name="country"  class="textarea-form" placeholder="Введите описание" cols="40" rows="2.5">{{$towars->country}}</textarea>
                    </div>
                    <div>
                        <label for="view">Измените вид чая</label>
                        <br>
                        <textarea name="view"  class="textarea-form" placeholder="Введите описание" cols="40" rows="2.5">{{$towars->view}}</textarea>
                    </div>
                    <div>
                        <label for="taste">Измените вкус чая</label>
                        <br>
                        <textarea name="taste"  class="textarea-form" placeholder="Введите описание" cols="40" rows="2.5">{{$towars->taste}}</textarea>
                    </div>
                    <div>
                        <label for="price">Измените цену чая</label>
                        <br>
                        <textarea name="price"  class="textarea-form" placeholder="Введите цену" cols="40" rows="2.5">{{$towars->price}}</textarea>
                    </div>
                    <div>
                        <label for="count">Измените кол-во чая</label>
                        <br>
                        <textarea name="count"  class="textarea-form" placeholder="Введите кол-во" cols="40" rows="2.5">{{$towars->count}}</textarea>
                    </div>
                    <button type="submit" class="btn_top1">Обновить товар</button>
                </form>
            </div>
        </div>
    </div>
