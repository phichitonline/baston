@extends('layouts.auth')

@section('content')

    <h5>Create account</h5>

    <!-- form -->
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Firstname" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Lastname" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required>
        </div>
        <button class="btn btn-primary btn-block">Register</button>
        <hr>
        <p class="text-muted">Already have an account?</p>
        <a href="{{ route('login') }}" class="btn btn-outline-light">Sign In</a>
    </form>
    <!-- ./ form -->

@endsection
