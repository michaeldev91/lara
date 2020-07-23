@extends('layout')
@section('content')
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" name="email" value="{{ old('email') }}" required class="form-control {{ $errors->has('email') ? 'is-invalid' : "" }}">
    @if ( $errors->has('email'))
        <span class="invalid-feedback">
        <b>{{ $errors->first('email') }}</b>
        </span>
    @endif
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" required class="form-control {{ $errors->has('password') ? 'is-invalid' : "" }}">
        @if ( $errors->has('password'))
        <span class="invalid-feedback">
        <b>{{ $errors->first('password') }}</b>
        </span>
    @endif
    </div>
    <div class="form-group">
        <div class="form-check">
        <input type="checkbox" class="form-check-input" name="remember" value="{{ old('remember') ? 'checked' :'' }}">
        <label class="form-check-label" for="remember">Remember me</label>
        </div>
    </div>
    <input type="submit" class="btn btn-primary btn-block" value="Login">
</form>
@endsection('content')