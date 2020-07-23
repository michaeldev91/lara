<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Welcome</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Laravel Blog</h5>
    
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('home') }}">Home page</a>
            <a class="p-2 text-dark" href="{{ route('contact') }}">Contact page</a>
            <a class="p-2 text-dark" href="{{ route('posts.index') }}">Posts</a>
            <a class="p-2 text-dark" href="{{ route('posts.create') }}">Add</a>

            @guest
                @if ( Route::has('register') )
                    <a href="{{ route('register') }}" class="p-2 text-dark">Register</a>
                @endif
                <a href="{{ route('login') }}" class="p-2 text-dark">Login</a>
            @else
                <a href="{{ route('logout') }}" class="p-2 text-dark" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout ({{ Auth::user()->name }})</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
            @endguest
        </nav>
    </div>
    <div class="container">
        @if(session()->has('status'))
            <p style="color:green">{{ session()->get('status') }}</p>
        @endif
        @yield('content')
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>