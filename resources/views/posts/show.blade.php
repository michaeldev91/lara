@extends('layout')
@section('content')
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p>
<small>Added at {{ $post->created_at->diffForHumans() }}</small>
@if ((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5)
    <b>New!</b>
@endif
<h4>Comments</h4>
<ul>
@forelse($post->comments as $comment)
<li><p class="font-weight-bold">{{$comment->content}}</p><p class="class-muted">added {{$comment->created_at->diffForHumans()}}<p></li>
@empty
<p>No comments yet</p>
@endforelse
</ul>
@endsection('content')