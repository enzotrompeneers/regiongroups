@extends('layouts.web.master')

@section('content')
    <h1>Wachtwoord opnieuw instellen</h1>

    <form action="{{ route('password.request') }}" method="post">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <label for="email">Email</label>
        <input type="email" id="email" value="{{ $email ?? old('email') }}" name="email" placeholder="Email" required autofocus>
        <br>

        <label for="password">Wachtwoord</label>
        <input type="password" id="password" name="password" placeholder="Wachtwoord" required>
        <br>

        <label for="password-confirm">Herhaal wachtwoord</label>
        <input type="password" id="password-confirm" name="password_confirmation" placeholder="Herhaal wachtwoord" required>
        <br>
        
        <button type="submit">Opslaan</button>
    </form>

    @include('partials.errors')  
@endsection