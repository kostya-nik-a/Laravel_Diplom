@extends('admin.layouts.app')
@section('title', 'CategoryCreate')
@section('content')
<h1>Введите название новой темы</h1>
<div class="create_container">
    <form method="POST" action="{{ route('category.store') }}">
        {{ csrf_field() }}    
        <input placeholder="Название темы" name="title" required autofocus>           
        <button type="submit" class="btn btn-primary btn-block btn-large">Создать тему</button>
    </form>    
</div>
@endsection