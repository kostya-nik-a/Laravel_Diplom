@extends('admin.layouts.app')
@section('title', 'CategoryCreate')
@section('content')
<h1>Введите данные нового пользователя</h1>
<div class="create_container">
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="">
            <div class="">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Имя" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="">
            <div class="">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                @if ($errors->has('email'))
                    <span class="is-invalid">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="">
            <div class="">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Пароль" required>

                @if ($errors->has('password'))
                    <span class="is-invalid">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
            <div class="">            
                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Повторите пароль" required>
            </div>
        <div class="">
            <div class="">
                <button type="submit" class="btn btn-primary">
                    Зарегистрировать
                </button>
            </div>
        </div>
    </form>       
</div>
@endsection