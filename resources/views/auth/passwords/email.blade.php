@extends('layouts.web.master')

@section('content')
    <h1>Reset wachtwoord</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('password.email') }}" method="post">
        @csrf
        
        <label for="email">Email</label>
        <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Email" required autofocus>
        <br>
        
        <button type="submit">Stuur wachtwoord reset link</button>
    </form>

    @include('partials.errors')  
@endsection