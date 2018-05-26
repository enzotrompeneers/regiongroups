@extends('layouts.web.master')

@section('pre-scripts')
<script>
    var Cityofcompanies = {
        csrfToken: "{{ csrf_token() }}",
        stripeKey: "{{ config('services.stripe.key') }}"

    };
</script>
@endsection

@section('content')
    @auth
        <h1>Profiel</h1>
        <p>
            Naam: {{ Auth::user()->name }} <br>
            Email: {{ Auth::user()->email }} <br>
        </p>

        <h2>Abonneren</h2>
        <div id="checkout">
            <checkout-form></checkout-form>
        </div>

        <h2>Portfolio</h2>
        @foreach($portfolios as $portfolio)
            @include('portfolios.portfolio')
        @endforeach
    @endauth
@endsection

@section('scripts')
<script>
        window.onload = function () {
        const app = new Vue({
            el: '#checkout'
        });
    }
</script>
<script src="https://checkout.stripe.com/checkout.js"></script>
@endsection


