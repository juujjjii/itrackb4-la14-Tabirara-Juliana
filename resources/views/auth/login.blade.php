@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Login</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <div class="mb-3">
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                class="form-control"
                required
            >
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                class="form-control"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Login
        </button>
    </form>
</div>
@endsection
