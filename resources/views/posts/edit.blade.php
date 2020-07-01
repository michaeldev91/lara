@extends('layout')
@section('content')
<form class="fm-inline" method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
       <label for="title">Title</label>
       <input class="form-control" type="text" name="title" id="title" value={{ old('title',$post->title) }}>
        </div>
        <div class="form-group">
       <label for="content">Content</label>
       <textarea class="form-control" name="content" id="content">{{ old('content',$post->content) }}</textarea>
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