@extends('layout')
@section('content')
<form method="POST" action="{{ route('posts.store') }}">
        @csrf
       <label for="title">Title</label><br>
       <input type="text" name="title" id="title" value={{ old('title') }}><br>
       <label for="content">Content</label><br>
       <textarea  name="content" id="content">{{ old('content') }}</textarea><br>
       <input type="submit" name="submit" id="submit">
   </form>
   @if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>
   @endif
@endsection('content')