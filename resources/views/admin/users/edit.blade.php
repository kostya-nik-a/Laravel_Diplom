@extends('admin.layouts.app')
@section('title', 'CategoryCreate')
@section('content')
<h1>Введите новый пароль администратора {{$user->login}}</h1>
<div class="create_container">
    <form method="POST" action="{{ route('user.update', $user) }}">
        {{ csrf_field() }}    
        <input type="password" placeholder="Новый пароль" name="password" required autofocus> 
        <input type="hidden" name="email" required value="{{$user->email}}">
        <input type="hidden" name="login" required value="{{$user->login}}">
        <input type="hidden" name="user_id" required value="{{$user->user_id}}">
        <button type="submit" class="btn btn-primary btn-block btn-large">Сменить пароль</button>
    </form>    
</div>
@endsection