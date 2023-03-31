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
                <p>Категории </p>
            </div>
            <li>
                <a href="{{ route('category.create') }}">Добавить категорию</a>
            </li>
            <!--Категории-->
            <table>
                <thead>
                <tr>
                    <th scope="col"><a href="#" class="sort-by"><h3>Категория</h3></a></th>
                    <th scope="col"><a href="#" class="sort-by"><h3>Изменить</h3></a></th>
                    <th scope="col"><a href="#" class="sort-by"><h3>Удалить</h3></a></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorys as $category)
                    <tr>
                        <th scope="row" style="color: white;">{{$category->name}}</th>
                        <td>
                            <a href="{{route('category.edit', ['id'=> $category->id])}}" style="color: white;">Изменить категорию</a>
                        </td>
                        <td>
                            <a href="{{route('category.delete', ['id'=> $category->id])}}" style="color: white;">Удалить категорию</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
