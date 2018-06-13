@extends('layouts.web.master')

@section('content')
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