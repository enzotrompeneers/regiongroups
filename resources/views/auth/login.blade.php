@extends('layouts.web.master')

@section('content')
<div id="particles-js"></div>
<div class="login">
    <div class="grid-container">
        <div class="flex-center">
                <form class="callout" action="{{ route('login') }}" method="post">
                @csrf
                <h2>Aanmelden</h2>
                <div class="floated-label-wrapper">
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="E-mailadres" required autofocus autocomplete="off">
                </div>
                
                <div class="floated-label-wrapper">
                    <label for="password">Wachtwoord</label>
                    <input type="password" id="password" name="password" placeholder="Wachtwoord" required>
                </div>

                <button type="submit" class="button expanded">Aanmelden</button>
                
                <p>
                    Wachtwoord vergeten?
                    <a href="{{ route('password.request') }}">
                        Vraag opnieuw aan
                    </a>
                </p>
                <p>
                    Niew hier? 
                    <a href="{{ route('register') }}">
                        Maak een account
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