@extends('layout')
@section('content')
<form class="fm-inline" method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-group">
       <label for="title">Title</label>
       <input class="form-control" type="text" name="title" id="title" value={{ old('title') }}>
        </div>
        <div class="form-group">
       <label for="content">Content</label><br>
       <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea><br>
        </div>
       <input class="btn btn-primary" type="submit" name="submit" id="submit">
   </form>
   @if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>
   @endif
@endsection('content')