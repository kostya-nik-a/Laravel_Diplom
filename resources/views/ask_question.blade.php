@extends('layouts.app')
@section('title', 'Create question')
@section('content')
    <h1>Введите свои данные и текст вопроса</h1>
    <form method="post" action="/question/store">
        {{ csrf_field() }}
        <div class="col-md-8">
            <div class="card">
                <input type="text" name="author" placeholder="Ваше имя" value="{{ old('author') }}" required autofocus>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <input type="text" name="email_author" placeholder="Ваш e-mail" value="{{ old('email_author') }}" required autofocus>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <textarea name="question" placeholder="Задайте Ваш вопрос" required="required"></textarea>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <button type="submit" class="btn btn-primary btn-block btn-large">Сохранить</button>
            </div>
        </div>

    </form>
@endsection