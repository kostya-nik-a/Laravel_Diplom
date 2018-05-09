@extends('layouts.app')
@section('title', 'CategoryCreate')

@section('content')
<h1>Введите данные для создания нового администратора</h1>
<div class="row justify-content-center">
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="col-md-8">
            <div class="card">
                <input id="login" type="text" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="login" placeholder="Логин" value="{{ old('login') }}" required autofocus>
                @if ($errors->has('login'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('login') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <input id="fio" type="text" class="form-control{{ $errors->has('fio') ? ' is-invalid' : '' }}" name="fio" placeholder="Фамилия Имя Отчество" value="{{ old('fio') }}" required autofocus>
                @if ($errors->has('fio'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('fio') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                @if ($errors->has('email'))
                    <span class="is-invalid">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Пароль" required>

                @if ($errors->has('password'))
                    <span class="is-invalid">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Повторите пароль" required>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>

    </form>       
</div>
@endsection