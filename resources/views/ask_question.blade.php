@extends('layouts.app')
@section('title', 'Create question')
@section('content')
    <div>
        <div style="width: 100%; text-align: center;">
            <h1>Задайте свой вопрос:</h1>
        </div>
        <div class="row justify-content-center">
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
                        <textarea name="question" placeholder="Задайте Ваш вопрос" required="required" rows="5"></textarea>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <button type="submit" class="btn btn-primary btn-block btn-large">Сохранить</button>
                    </div>
                </div>

                <div class="blockquote-reverse">Ваш вопрос будет опубликован после модерации администратором сайта и публикации ответа</div>

            </form>

        </div>
    </div>
@endsection