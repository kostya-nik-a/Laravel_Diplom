@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Админка</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <h2 class="admin">Добро пожаловать, {{ Auth::user()->login }}! </h2>
                            <h3>Начинаем работу с:</h3>

                            <button><a href="/admin/action/user" class="btn btn-primary btn-block btn-large">Администраторами</a></button>
                            <button><a href="/admin/action/category" class="btn btn-primary btn-block btn-large">Категориями и вопросами</a></button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection