@extends('user.layouts.layout')


@section('content')
        <h1>Main page</h1>
        @auth()
            <a href="">{{auth()->user()->name}}</a>
            <a href="{{ route('logout') }}">Выход</a>
        @endauth
        @guest()
            <a href="{{ route('register.create') }}">Регистрация</a>
            <span> / </span>
            <a href="{{ route('login.form') }}">Вход</a>
        @endguest
@endsection
