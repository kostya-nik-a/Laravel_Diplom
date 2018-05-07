@extends('admin.layouts.app_form')
@section('title', 'CategoryQuestions')
@section('content')
<h1>Редактируйте вопрос, сколько душе угодно :)</h1>
<form method="post" action="{{ route('question.update', $question) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <label id="author">Имя автора вопроса</label>
    <input type="text" name="author" value="{{$question->author}}" required="required" />
    <label id="email">Email автора</label>
    <input type="email" name="email_author" value="{{$question->email_author}}" required="required" />
    <label id="category_id">Тема, к которой вопрос относится</label>
    <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" @if($question->category_id == $category->id) selected @endif>{{$category->title}}</option>
        @endforeach
    </select>
    <label id="question">Текст вопроса</label>
    <textarea name="question" required="required">{{$question->question}}</textarea>
    <label id="answer">Текст ответа</label>
    <textarea name="answer" value="{{$question->answer}}" required="required">{{$question->answer}}</textarea>
    <label id="status">Статус вопроса (опубликован или скрыт)</label>
    <select name="status">        
        <option value="1">Опубликовать</option>
        <option value="0">Скрыть</option>        
    </select>
    <button type="submit" class="btn btn-primary btn-block btn-large">Сохранить изменения</button>
</form>
@endsection