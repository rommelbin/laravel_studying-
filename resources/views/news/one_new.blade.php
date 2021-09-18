@extends('layouts.app')
@section('content')
    TITLE::{{$news['author']}}
    <hr>
    <hr>
    ID ::{{$news['id']}}
    <hr>
    <hr>
    AUTHOR::{{$news['author']}}
    <hr>
    <hr>
    DESCRIPTION:: {{$news['description']}}
@endsection
