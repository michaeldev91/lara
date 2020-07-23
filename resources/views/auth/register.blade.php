@extends('layout')
@section('content')
<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Name:</label>
    <input type="text" name="name" value="{{ old('name') }}" required class="form-control {{ $errors->has('name') ? 'is-invalid' : "" }}">
    @if ( $errors->has('name'))
        <span class="invalid-feedback">
        <b>{{ $errors->first('name') }}</b>
        </span>
    @endif
    </div>
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
        <label for="">Confirm Password</label>
        <input type="password" name="password_confirmation" required class="form-control">
    </div>
    <input type="submit" class="btn btn-primary btn-block" value="Register">
</form>
@endsection('content')