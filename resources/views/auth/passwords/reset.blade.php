@extends('layouts.web.master')

@section('content')
<div id="particles-js"></div>
<div class="login">
    <div class="grid-container">
        <div class="flex-center">
                <form class="callout" action="{{ route('password.request') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <h2>Wachtwoord opnieuw instellen</h2>
                <div class="floated-label-wrapper">
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email" value="{{ $email ?? old('email') }}" name="email" placeholder="E-mailadres" required autofocus>
                </div>
                
                <div class="floated-label-wrapper">
                    <label for="password">Wachtwoord</label>
                    <input type="password" id="password" name="password" placeholder="Wachtwoord" required>
                </div>

                <div class="floated-label-wrapper">
                    <label for="password-confirm">Herhaal wachtwoord</label>
                    <input type="password" id="password-confirm" name="password-confirm" placeholder="Herhaal wachtwoord" required>
                </div>

                <button type="submit" class="button expanded">Opslaan</button>

                @include('partials.errors')  
            </form>
            
        </div>
    </div>
</div>
@endsection

@section('post-scripts')
    <script type="text/javascript" src="{{ URL::asset('js/all-particles.js') }}"></script>
@endsection
