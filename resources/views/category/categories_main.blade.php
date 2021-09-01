@extends('layouts.app')
@section('content')
    @foreach($categories as $category)
    Имя категории: {{$category['name']}}
    <br>
    Айди категории: {{$category['id']}}
    <br>
    <a href="{{route('category.show', $category['id']) }}">Перейти к категории</a>
    <br>
    @endforeach

@endsection
