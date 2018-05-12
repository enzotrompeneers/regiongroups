@extends('layouts.web.master')

@section('content')
    <h1>{{ $portfolio->name }}</h1>
    <h2>{{ $portfolio->description }}</h2>

    <hr>
    <h3>Reviews</h3>
    @foreach($portfolio->reviews as $review)
        <p>
            Rating:{{ $review->rating }} <br>
            Review: {{ $review->body }} <br>
            {{ $review->created_at->diffForHumans() }}
        </p>
    @endforeach

    <hr>
    <h3>Review plaatsen</h3>
    <form action="/portfolios/{{ $portfolio->id }}/reviews" method="post">
        {{ csrf_field() }}

        <label for="rating">Rating</label>
        <input type="text" id="rating" name="rating" placeholder="Rating" required>
        <br>

        <label for="body">Review</label>
        <textarea name="body" id="body" required></textarea>
        <br>

        <button type="submit">Review toevoegen</button>
    </form>

    @include('partials.errors')
@endsection