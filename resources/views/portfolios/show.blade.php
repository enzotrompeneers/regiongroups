@extends('layouts.web.master')

@section('content')
    <h1>{{ $portfolio->name }}</h1>
    <h2>{{ $portfolio->description }}</h2>

    <hr>
    <h3>Reviews</h3>
    @foreach($portfolio->ratings as $rating)
    <p>
        Rating:{{ $rating->rating }} <br>
        Review: {{ $rating->review }} <br>
        {{ $rating->created_at->diffForHumans() }}
    </p>

    @endforeach
@endsection