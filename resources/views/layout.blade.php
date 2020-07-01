<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <ul>
    <li><a href="{{ route('home') }}">Home page</a></li>
    <li><a href="{{ route('contact') }}">Contact page</a></li>
    <li><a href="{{ route('posts.index') }}">Posts</a></li>
    <li><a href="{{ route('posts.create') }}">Add Post</a></li>
    </ul>

    @if(session()->has('status'))
        <p style="color:green">{{ session()->get('status') }}</p>
    @endif
    @yield('content')
</body>
</html>