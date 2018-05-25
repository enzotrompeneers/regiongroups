@extends('layouts.web.master')

@section('content')
    @auth
        @if($portfolio->user_id === Auth::user()->id)
            <a href="{{ route('portfolio.edit', $portfolio->name) }}">Bewerken</a>

            <a href="{{ route('portfolio.destroy', $portfolio->name) }}" 
                 onclick="event.preventDefault();
                    if(confirm('Weet u zeker dat u het portfolio wilt verwijderen?'))
                    document.getElementById('destroy-form').submit();">
                Verwijderen
            </a>

            <form id="destroy-form" action="{{ route('portfolio.destroy', $portfolio->name) }}" method="POST" style="display:none;">
                @csrf
                {{ method_field('delete') }}
            </form>

            <script>
                function confirmDelete() {
                    return confirm('Bent u zeker?')
                }
            </script>
        @endif
    @endauth

    
                
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
        <form action="/portfolios/{{ $portfolio->name }}/reviews" method="post">
            @csrf

            <label for="rating">Rating</label>
        <input type="text" id="rating" value="{{ old('rating') }}" name="rating" placeholder="Rating" required>
            <br>

            <label for="body">Review</label>
            <textarea name="body" id="body" required>{{ old('body') }}</textarea>
            <br>

            <button type="submit">Review toevoegen</button>
        </form>
        @include('partials.errors')

    @else
        <p>Om een review te plaatsen moet je <a href="{{route('login')}}">inloggen</a>.</p>

    @endauth
@endsection