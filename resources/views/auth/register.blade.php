@extends('layouts.guest')

@section('main-content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <label for="name">
                Name
            </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email">
                Email
            </label>
            <input type="email" id="email" name="email" class="form-control">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">
                Password
            </label>
            <input type="password" class="form-control" id="password" name="password">
            <div id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
            </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">
                Confirm Password
            </label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <div>
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <div class="mt-4 d-grid">
                <button type="submit" class="btn btn-outline-dark">
                    Register
                </button>
            </div>
        </div>
    </form>
@endsection
