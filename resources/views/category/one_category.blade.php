@extends('layouts.app')
@section('content')

    <h1>Айди категории -- {{$category['id']}}  </h1>
    <h3>Название категории --  {{$category['title']}} </h3>
    <h4>Создание --  {{$category['created_at']}} </h4>
@endsection
