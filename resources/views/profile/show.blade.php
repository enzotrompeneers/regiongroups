@extends('layouts.web.master')

@section('pre-scripts')
<script>
    window.onload = function () {
    const app = new Vue({
        el: '#checkout'
    });
}
</script>
@endsection

@section('content')
    @auth
        <h1>Profiel</h1>
        <p>
            Naam: {{ Auth::user()->name }} <br>
            Email: {{ Auth::user()->email }} <br>
        </p>
        <!-- include('partials.payment3') -->

        <h2>Abonneren</h2>
        <div id="checkout">
            <checkout-form></checkout-form>
        </div>
        <script src="https://checkout.stripe.com/checkout.js"></script>


        <h2>Portfolio</h2>
        @foreach($portfolios as $portfolio)
            @include('portfolios.portfolio')
        @endforeach
    @endauth
@endsection

@section('scripts')
<script>
    
</script>
<script src="https://checkout.stripe.com/checkout.js"></script>
@endsection


