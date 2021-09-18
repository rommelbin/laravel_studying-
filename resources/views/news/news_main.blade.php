@extends('layouts.app')
@section('content')
    @foreach($news as $one_new)
        Author: <h4>{{$one_new['author']}}</h4>
        Created_at: <h4>{{$one_new['created_at']}}</h4>
        Updated_at: <h4>{{$one_new['updated_at']}}</h4>
        Text of article: <h4>{{$one_new['description']}}</h4>
        <a href="{{route('news.show', $one_new['id'])}}">Переход к статье</a>
        <br>
        <br>
        <hr>
    @endforeach

    <a href="{{route('news.create')}}"><b>Create</b></a>
@endsection
