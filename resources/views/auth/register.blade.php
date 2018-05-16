@extends('layouts.web.master')

@section('content')
    <h1>Registreren</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf

        <label for="name">Naam</label>
        <input type="text" id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="Naam" value="{{ old('name') }}" required autofocus>
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>
        <br>

        <label for="password">Wachtwoord</label>
        <input type="password" id="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Wachtwoord" required>
        <br>

        <label for="password_confirmation">Herhaal wachtwoord</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Herhaal wachtwoord" required>
        <br>

        <button type="submit">Registreren</button>
    </form>
    
    @include('partials.errors')
@endsection