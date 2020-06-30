@extends('layout')
@section('content')
    <ul>
    @forelse($posts as $post)
        <li>
        <h3><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{$post['title']}}</a></h3>
            <p>{{$post['content']}}</p>
        </li>
    @empty
        <p>No blogpost yet</p>
    @endforelse
    </ul>
@endsection('content')