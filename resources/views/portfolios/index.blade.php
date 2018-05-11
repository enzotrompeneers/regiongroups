@extends('layouts.web.master')

@section('content')
    <h1>Search portfolio</h1>

    @foreach($portfolios as $portfolio)
        @include('portfolios.portfolio')
    @endforeach

@endsection