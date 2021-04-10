@extends('layouts.auth')

@section('content')

    <h5>Reset password</h5>

    <!-- form -->
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username or email" required autofocus>
        </div>
        <button class="btn btn-primary btn-block">Submit</button>
        <hr>
        <p class="text-muted">Take a different action.</p>
        <a href="{{ route('register') }}" class="btn btn-outline-light mr-1">Register now!</a>
        or
        <a href="{{ route('login') }}" class="btn btn-outline-light ml-1">Sign In</a>
    </form>
    <!-- ./ form -->

@endsection
