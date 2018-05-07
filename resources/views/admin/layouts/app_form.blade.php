<!DOCTYPE html>
<html lang="ru" >
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style_form.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
    <div class="form_edit">
	    @yield('content')
    </div>
    <script  src="js/index_form.js"></script>
</body>
</html>
