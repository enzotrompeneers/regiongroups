@extends('layouts.web.master')

@section('content')
    @auth
    <h1>Profiel</h1>
    <p>
        Naam: {{ Auth::user()->name }} <br>
        Email: {{ Auth::user()->email }} <br>

        @foreach($portfolios as $portfolio)
            @include('portfolios.portfolio')
        @endforeach
    </p>
    @endauth
@endsection