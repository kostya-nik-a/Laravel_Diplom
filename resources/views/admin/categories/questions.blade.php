@extends('admin.layouts.app')
@section('title', 'CategoryQuestions')
@section('content')
<h1>Вы просматриваете информацию о вопросах в теме {{$category->title}}</h1>
<table class="table">
    <tr>
        <th>№п/п</th>                
        <th>Дата создания</th>  
        <th>Статус</th>
        <th>Текст вопроса</th>
        <th>Редактировать</th>
        <th>Опубликовать/Скрыть вопрос</th>        
        <th>Удалить</th>
    </tr>
    @foreach ($questions as $question)
    <tr>
        <td>{{$questions->perPage()*($questions->currentPage()-1)+$loop->iteration}}</td>        
        <td>{{ $question->created_at }}</td>
        <td>
            @if($question->answer == NULL)
                Ожидает ответа
            @elseif($question->status == 0)
                Скрыт
            @else 
                Опубликован            
            @endif
        </td>
        <td>{{$question->question}}</td>        
        <td>           
            <a class="btn btn-primary" href="{{ route('question.edit', $question) }}">Редактировать</a>
        </td>
        <td>
            <a class="btn btn-primary" href="{{ route('publishHide.questions', $question) }}">{{$question->status == 0 ? 'Опубликовать' : 'Скрыть'}}</a>
        </td>        
        <td>
            <form action="{{ route('question.destroy', $question) }}" method="post">
                <input class="btn btn-primary" type="submit" value="Удалить вопрос">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
        </td>        
    </tr>    
    @endforeach
</table>
<span>{{$questions->links()}}</span>
<a class="admin" href="{{ route('category.index') }}">Назад к категориям</a>
<a class="admin" href="{{ route('admin.home') }}">Вернуться к списку возможностей администратора</a>
@endsection