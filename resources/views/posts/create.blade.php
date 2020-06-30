@extends('layout')
@section('content')
<form method="POST" action="{{ route('posts.store') }}">
        @csrf
       <label for="title">Title</label><br>
       <input type="text" name="title" id="title"><bR>
       <label for="content">Content</label><br>
       <textarea  name="content" id="content"></textarea><br>
       <input type="submit" name="submit" id="submit">
   </form>
@endsection('content')