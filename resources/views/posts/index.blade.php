@extends('layout')
@section('content')
    <ul>
    @forelse($posts as $post)
        <li>
        <h3><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{$post->title}}</a></h3>
            <p>{{$post['content']}}</p>
            @if( $post->comments_count > 0 )
                 <p>{{$post->comments_count}} commnets</p>
            @else
                <p>No commnets for this post</p>
            @endif
            <a class="btn btn-primary" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
            <form class="fm-inline" method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                @csrf
                @method('DELETE')
               <input class="btn btn-danger" type="submit" name="submit" id="submit" value="Delete">
           </form>
           <br><br>
        </li>
    @empty
        <p>No blogpost yet</p>
    @endforelse
    </ul>
@endsection('content')