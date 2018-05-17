@extends('layouts.web.master')

@section('content')
    <h1>Home page</h1>

    <h2>List portfolios</h2>
    @foreach($portfolios as $portfolio)
        @include('portfolios.portfolio')
    @endforeach

    <h3>Sorteren op gemeente</h3>
    
    <ul>
        <li><a href="{{ route('home') }}">Alles</a></li>
        @foreach($cities as $city)
        <li><a href="{{ route('city.show', $city->name) }}">{{ $city->name }}: {{ $city->amount }}</a></li>
        @endforeach
    </ul>

@endsection