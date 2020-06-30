@extends('layout')
@section('content')
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p>
<small>Added at {{ $post->created_at->diffForHumans() }}</small>
@if ($post->id == 1)
 Post one!
@elseif ($post->id == 2)
 Post two!
@else
 Other post!
@endif
@endsection('content')