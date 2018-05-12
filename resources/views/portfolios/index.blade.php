@extends('layouts.web.master')

@section('content')

    <h1>Portfolio page</h1>

    <h2>List portfolios</h2>
    @foreach($portfolios as $portfolio)
        @include('portfolios.portfolio')
    @endforeach

@endsection