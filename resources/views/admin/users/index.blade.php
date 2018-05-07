@extends('admin.layouts.app')
@section('title', 'Category')
@section('content')
    <h1>Вы просматриваете информацию о существующих администраторах</h1>
    <table class="table">
        <tr>
            <th>№п/п</th>
            <th>Имя администратора</th>  
            <th>Сменить пароль</th>      
            <th>Удалить</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>        
            <td>{{ $user->name }}</td>
            <td><a class="btn btn-primary" href="{{ route('user.edit', $user) }}">Сменить пароль</a></td>         
            <td>            
                <form action="{{ route('user.destroy', $user) }}" method="post">
                    <input class="btn btn-primary" type="submit" value="Удалить администратора">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                </form>
            </td>       
        </tr>    
    @endforeach
    </table>
@endsection
@section('links')
    <a class="admin" href="{{route('user.create')}}">Создать нового администратора</a>
    <a class="admin" href="{{ route('admin.home') }}">Вернуться к списку возможностей администратора</a>
@endsection