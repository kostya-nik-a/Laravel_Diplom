@extends('admin.layouts.app')
@section('title', 'Category')
@section('content')
<table class="item">
    <tr>
        <th>№п/п</th>
        <th>Название категории</th>                    
    </tr>
    @foreach ($categories as $category)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->title }}</td>        
    </tr>
    @endforeach
</table>
<a href="category.create">Создать новую тему</a>
@endsection