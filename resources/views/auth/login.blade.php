@extends('layouts.web.master')

@section('content')
    <h1>Inloggen</h1>

    <form action="{{ route('login') }}" method="post">
        @csrf

        <label for="email">Email</label>
        <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Email" required autofocus>
        <br>

        <label for="password">Wachtwoord</label>
        <input type="password" id="password" name="password" placeholder="Wachtwoord" required>
        <br>

        <button type="submit">Inloggen</button>
        <a href="{{ route('password.request') }}">
            Wachtwoord vergeten?
        </a>
    </form>

    @include('partials.errors')  
@endsection
