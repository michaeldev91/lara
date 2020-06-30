@extends('layout')
@section('content')
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p>
<small>Added at {{ $post->created_at->diffForHumans() }}</small>
@if ((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5)
    <b>New!</b>
@endif
@endsection('content')