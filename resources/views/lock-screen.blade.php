@extends('layouts.auth')

@section('content')

    <h5>Enter your password</h5>

    <!-- form -->
    <form>
        <div class="form-group d-flex align-items-center">
            <div class="mr-3">
                <figure class="avatar avatar-sm">
                    <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle" alt="avatar">
                </figure>
            </div>
            <input type="password" class="form-control mb-0" placeholder="Password" required autofocus>
        </div>
        <button class="btn btn-primary btn-block">Unlock</button>
        <hr>
        <a href="{{ route('login') }}" class="btn btn-outline-light">Sign out</a>
    </form>
    <!-- ./ form -->

@endsection
