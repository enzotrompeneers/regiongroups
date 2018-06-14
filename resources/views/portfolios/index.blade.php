@extends('layouts.web.master')

@section('content')
    <section class="search">     
        <div class="grid-container">
                <h1>Zoek naar <span class="typer"></span></h1>
                <div id="typed-strings">
                    <p>een stielman in uw gemeente...</p>
                    <p>een bedrijf in uw gemeente...</p>
                    <p>een winkel in uw gemeente...</p>
                    <p>een restaurant in uw gemeente...</p>
                </div>
            @include('partials.search')
        </div>
    </section>
    <section class="portfolios">
        <div class="grid-container">
            @include('portfolios.portfolio')
        </div>
    </section>

    <section class="cities">
        <div class="grid-container">
            @include('partials.cities')
        </div>
    </section>
@endsection