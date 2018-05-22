@extends('layouts.web.master')

@section('content')
    <h1>Home page</h1>

    @include('partials.search')

    <h2>List portfolios</h2>
    @foreach($portfolios as $portfolio)
        @include('portfolios.portfolio')
    @endforeach

    <h3>Sorteren op gemeente</h3>
    
    @include('partials.sidebar')

@endsection