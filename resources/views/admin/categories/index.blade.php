@extends('admin.layouts.app')
@section('title', 'Category')
@section('content')
    <h1>Вы просматриваете информацию о существующих темах</h1>
    <table class="table">
        <tr>
            <th>№п/п</th>
            <th>Название темы</th>        
            <th>Всего вопросов</th>  
            <th>Опубликованных вопросов</th>
            <th>Вопросов без ответа</th>
            <th>Просмотреть вопросы</th>
            <th>Удалить</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>        
            <td>{{ $category->title }}</td>
            <td>{{$category->question()->count()}}</td>
            <td>{{$category->question()->where('status', '!=', 0)->count()}}</td>
            <td>
                {{$category->question()->where('answer', NULL)->count()}}
                <a class="btn btn-primary @if ($category->question()->where('answer', NULL)->count() == 0) hidden @endif" href="{{ route('unanswered.questions', $category) }}">Просмотреть</a> 
            </td> 
            <td> 
                <a class="btn btn-primary" href="{{ route('question.questions', $category) }}">Обзор вопросов</a>            
            </td>   
            <td>            
                <form action="{{ route('category.destroy', $category) }}" method="post">
                    <input class="btn btn-primary" type="submit" value="Удалить тему и все вопросы в ней">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                </form>
            </td>       
        </tr>
        @endforeach
    </table>
@endsection
@section('links')
    <a class="admin" href="{{route('category.create')}}">Создать новую тему</a>
    <a class="admin" href="{{ route('admin.home') }}">Вернуться к списку возможностей администратора</a>
@endsection