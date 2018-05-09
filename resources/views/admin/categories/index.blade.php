@extends('layouts.app')
@section('title', 'Category')

@section('content')
    <h1>Приветствуем Вас, {{ Auth::user()->fio }}!</h1>
    <h3>Вы просматриваете информацию по темам</h3>
    <table class="table table-hover table-striped m-t-xl">
        <tr>
            <th>№п/п</th>
            <th>Название темы</th>        
            <th>Всего вопросов</th>  
            <th>Опубликованных вопросов</th>
            <th>Скрытых вопросов</th>
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
            <td>{{$category->question()->where('status', '=', 0)->count()}}</td>
            <td>
                {{$category->question()->where('answer', '=', NULL)->count()}}
                <a class="btn btn-primary
                    @if ($category->question()->where('answer','=', NULL)->count() == 0) hidden @endif"
                   href="{{ route('unanswered.questions', $category) }}">Просмотреть</a>
            </td> 
            <td> 
                <a class="btn btn-primary" href="{{ route('question.questions', $category) }}">Просмотр вопросов</a>
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
    <button type="submit" class="btn btn-success">
        <a style="color: white; text-decoration: none;" href="{{route('category.create')}}">Создать новую тему</a>
    </button>

    <button type="submit" class="btn btn-success">
        <a style="color: white; text-decoration: none;" href="{{ route('admin.home') }}">На главную</a>
    </button>
@endsection