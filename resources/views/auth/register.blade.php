@extends('layouts.web.master')

@section('content')
<div id="particles-js"></div>
<div class="login">
    <div class="grid-container">
        <div class="flex-center">
                <form class="callout small-padding-top" action="{{ route('register') }}" method="post">
                @csrf
                <h2>Registreren</h2>
                <div class="floated-label-wrapper">
                        <label for="name">Naam</label>
                        <input type="text" id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="Naam" value="{{ old('name') }}" required autofocus autocomplete="off">
                    </div>

                <div class="floated-label-wrapper">
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mailadres" value="{{ old('email') }}" required autocomplete="off">
                </div>
                
                <div class="floated-label-wrapper">
                    <label for="password">Wachtwoord</label>
                    <input type="password" id="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Wachtwoord" required>
                </div>

                <div class="floated-label-wrapper">
                    <label for="password_confirmation">Herhaal wachtwoord</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Herhaal wachtwoord" required>
                </div>

                <button type="submit" class="button expanded">Account maken</button>
                
                <p>
                    Heeft u al een account?
                    <a href="{{ route('login') }}">
                        Hier aanmelden
                    </a>
                </p>
                @include('partials.errors')  
            </form>
            
        </div>
    </div>
</div>
@endsection

@section('post-scripts')
    <script type="text/javascript" src="{{ URL::asset('js/all-particles.js') }}"></script>
@endsection