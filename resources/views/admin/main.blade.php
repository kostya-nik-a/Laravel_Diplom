@extends('layouts.app')

@section('content')
    <h2 class="admin">Здравствуйте,<br> уважаемый {{ Auth::user()->login }}! <br> Выберите из списка, <br> чем или кем будем заниматься </h2>

    <a href="/admin/action/user" class="btn btn-primary btn-block btn-large">Администраторами</a>
    <a href="/admin/action/category" class="btn btn-primary btn-block btn-large">Категориями и вопросами</a>
    <a class="admin" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Выйти
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection