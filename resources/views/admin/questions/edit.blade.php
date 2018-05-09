@extends('layouts.app')
@section('title', 'CategoryQuestions')
@section('content')
<h1>Редактирование вопроса</h1>
<form method="post" action="{{ route('question.update', $question) }}">
    <table class="table table-hover table-striped m-t-xl">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <tr>
            <th>Имя автора</th>
            <th>Email автора</th>
            <th>Тема:</th>
            <th>Текст вопроса</th>
            <th>Текст ответа</th>
            <th>Статус вопроса (опубликован или скрыт)</th>
            <th>Удалить</th>
        </tr>
        <td>
            {{$question->author}}
        </td>

        <td>
            {{$question->email_author}}
        </td>

        <td>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if($question->category_id == $category->id) selected @endif>{{$category->title}}</option>
            @endforeach
        </select>
        </td>

        <td>
            {{$question->question}}
        </td>

        <td>
            {{$question->answer}}<br>
            <a class="btn btn-primary" href="{{ route('question.answer', $question->id) }}">Ответить</a>
        </td>

        <td>
            <select name="status">
                <option value="1">Опубликовать</option>
                <option value="0">Скрыть</option>
            </select>
        </td>

    </table>

    <button type="submit" class="btn btn-success">Сохранить изменения</button>
</form>
@endsection