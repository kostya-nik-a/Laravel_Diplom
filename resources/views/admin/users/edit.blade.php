@extends('layouts.app')
@section('title', 'CategoryCreate')
@section('content')
<h1>Введите новый пароль администратора {{$user->login}}</h1>
<div class="container-fluid">
    <form method="POST" action="{{ route('user.update', $user) }}">
        {{ csrf_field() }}    
        <input type="password" placeholder="Новый пароль" name="password" required autofocus>
        <input type="hidden" name="user_id" required value="{{$user->user_id}}">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>    
</div>
@endsection