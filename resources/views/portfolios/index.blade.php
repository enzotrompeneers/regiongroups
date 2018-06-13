@extends('layouts.web.master')

@section('content')
    <section class="search">
        <div class="grid-container">     
            @include('partials.search')
        </div>
    </section>

    <section class="portfolios">
        <div class="grid-container">
            <div class="grid-x">
                @foreach($portfolios as $portfolio)
                    <div class="cell large-4 medium-6">
                        @include('portfolios.portfolio')
                    </div>
                @endforeach
            </div>
            @include('partials.sidebar')
        </div>
    </section>
@endsection