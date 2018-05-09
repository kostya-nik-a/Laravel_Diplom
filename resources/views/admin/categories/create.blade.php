@extends('layouts.app')
@section('title', 'CategoryCreate')
@section('content')
<h1>Введите название новой темы</h1>
<div class="create_container">
    <form method="POST" action="{{ route('category.store') }}">
        {{ csrf_field() }}
        <div class="col-md-8">
            <div class="card">
                <input placeholder="Название темы" name="title" required autofocus>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>    
</div>
@endsection