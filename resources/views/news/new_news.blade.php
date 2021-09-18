@extends('layouts.app')
@section('content')
<form action="{{route('news.store')}}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name='title' placeholder="Please, the title of an article">
    <input type="text" name='slug' placeholder="Please, the slug of an article">
    <input type="text" name='description' placeholder="Please, the description of an article">
    <input type="text" name='author' placeholder="Please, the author of an article">
    <input type="text" name='category_id' placeholder="Please, the category of an article">
    <input type="submit" value="Send">
</form>
@endsection