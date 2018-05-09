<!doctype html>
<html lang="{{ app()->getLocale() }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Диплом на Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/public/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="/public/css/style.css"> <!-- Resource style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            <div class="content">
                @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <strong>{{ Auth::user()->fio }},</strong> вы уже авторизованы: <a href="{{ url('/home') }}">Вернуться к работе!</a>
                        @else
                            <a href="{{ route('login') }}">Вход</a>
                            <a href="{{ route('register') }}">Регистрация</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>

        <h1 class="flex-center">Дипломная работа по курсу «PHP/SQL: back-end разработка и базы данных»</h1>



        <section class="list-group active">
            @foreach ($categories as $category)
                <div class="cd-faq-items cd-faq-group">
                    <ul id="{{$category->title}}" class="cd-faq-group">
                        <li class="list-group-item list-group-item-action align-items-start active"><h2>{{ $category->title }}</h2></li>
                        @foreach ($questions as $question)
                            @if ($question->category->title == $category->title and @!empty($question->answer) and $question->status != 0 )
                                <li>
                                    <a class="list-group-item list-group-item-info cd-faq-trigger" href="#0">{{ $question->question }}</a>
                                    <div class="list-group-item list-group-item-light cd-faq-content">
                                        <p>{{ $question->answer }}</p>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
                <a href="#0" class="cd-close-panel">Close</a>
                <div class="cd-faq-items">
                <button type="submit" class="btn btn-success">
                    <a style="color: white; text-decoration: none;" href="/ask">Задать вопрос?</a>
                </button>
            </div>

        </section>

    <script src="/public/js/modernizr.js"></script> <!-- Modernizr -->
    <script src="/public/js/jquery-2.1.1.js"></script>
    <script src="/public/js/jquery.mobile.custom.min.js"></script>
    <script src="/public/js/main.js"></script> <!-- Resource jQuery -->
    </body>
</html>
