@extends('layouts.web.master')

@section('content')
    <h2>{{ $portfolio->name }}</h3>
    <p>
        Logo: <br>
        {{ $portfolio->logo }}
    </p>
    <p>
        Beschrijving: <br>
        {{ $portfolio->description }}
    </p>

    <p>
        Adres: <br>
        {{ $portfolio->street }} {{ $portfolio->housenumber }}, <br>
        {{ $portfolio->postal_code }} {{ $portfolio->city }} {{ $portfolio->country }}
    </p>

    <p>
        GSM/Tel: {{ $portfolio->phone }} <br>
        Email: {{ $portfolio->email }} <br>
        Website: {{ $portfolio->external }}
    </p>
    <p>Gemaakt door: {{$portfolio->user->name}}, op: {{ $portfolio->created_at->toFormattedDateString() }}</p>

    <hr>
    <h3>Reviews</h3>
    @foreach($portfolio->reviews as $review)
        <p>
            Rating:{{ $review->rating }} <br>
            Review: {{ $review->body }} <br>
            Gemaakt door: {{$review->user->name}} {{ $review->created_at->diffForHumans() }}
        </p>
    @endforeach

    <hr>

    <h3>Review plaatsen</h3>
    @auth
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

    @else
        <p>Om een review te plaatsen moet je <a href="{{route('login')}}">inloggen</a>.</p>

    @endauth
@endsection