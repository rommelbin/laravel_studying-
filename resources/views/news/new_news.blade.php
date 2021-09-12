@extends('layouts.app')
@section('content')
<form action="{{route('news.store')}}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name='name' placeholder="Please, write your name">
    <input type="text" name='old' placeholder="Please, write your age">
    <input type="text" name="mother_town" placeholder="Please, write your town">
    <input type="submit" value="Send">
</form>
@endsection