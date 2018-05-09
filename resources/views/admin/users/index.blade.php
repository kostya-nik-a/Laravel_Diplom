@extends('layouts.app')
@section('title', 'Category')
@section('content')
    <h1>Приветствуем Вас, {{ Auth::user()->fio }}!</h1>
    <hr>
    <table class="table table-hover table-striped m-t-xl">
        <thead>
        <tr>
            <th>№п/п</th>
            <th>Имя администратора</th>
            <th>Сменить пароль</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->login }}</td>
                <td>{{ $user->fio }}</td>
                <td>{{ $user->email }}</td>
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
    <button type="submit" class="btn btn-success">
        <a style="color: white; text-decoration: none;" href="{{route('user.create')}}">Создать нового администратора</a>
    </button>

    <button type="submit" class="btn btn-success">
    <a style="color: white; text-decoration: none;" href="{{ route('admin.home') }}">На главную</a>
    </button>
@endsection