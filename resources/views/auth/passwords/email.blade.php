@extends('layouts.web.master')

@section('content')
<div id="particles-js"></div>
<div class="login">
    <div class="grid-container">
        <div class="flex-center">
                <form class="callout" action="{{ route('password.email') }}" method="post">
                @csrf
                <h2>Reset wachtwoord</h2>
                <div class="floated-label-wrapper">
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="E-mailadres" required autofocus>
                </div>

                <button type="submit" class="button expanded">Stuur wachtwoord reset link</button>

                @include('partials.errors')  
            </form>
            
        </div>
    </div>
</div>
@endsection

@section('post-scripts')
    <script type="text/javascript" src="{{ URL::asset('js/all-particles.js') }}"></script>
@endsection