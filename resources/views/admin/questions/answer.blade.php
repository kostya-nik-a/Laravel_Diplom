@extends('layouts.app')
@section('title', 'CategoryQuestions')
@section('title', 'CategoryCreate')

@section('content')
    <h1>Ответ на вопрос:</h1>
    <h3>{{$question->question}}</h3>
    <div class="container-fluid">
        <form method="POST" action="{{ route('question.update_answer', $question) }}">
            {{ csrf_field() }}
            <input type="text" placeholder="Введите текст ответа" name="answer" required autofocus>
            <input type="hidden" name="id" required value="{{$question->id}}">
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection