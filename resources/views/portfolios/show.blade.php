@extends('layouts.web.master')

@section('content')
    <div class="grid-container">
        @auth
            @if($portfolio->user_id === Auth::user()->id)
                <a class="button" href="{{ route('portfolio.edit', $portfolio->slug) }}">Bewerken</a>

                <a class="button alert" href="{{ route('portfolio.destroy', $portfolio->slug) }}" 
                    onclick="event.preventDefault();
                        if(confirm('Weet u zeker dat u het portfolio wilt verwijderen?'))
                        document.getElementById('destroy-form').submit();">
                    Verwijderen
                </a>

                <form id="destroy-form" action="{{ route('portfolio.destroy', $portfolio->slug) }}" method="POST" style="display:none;">
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

        
                    
        <h2>{{ $portfolio->name }}</h2>
        <p>
            Logo: <br>
            <?php $logo_image = $portfolio->logo ? Storage::url($portfolio->logo) : "img/logo-avatar.svg";?>
            <div class="logo-image" style="background-image:url(<?php echo $logo_image ?>);"></div>
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
            E-mailadres: {{ $portfolio->email }} <br>
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
            @include('partials.review')
        @else
            <p>Om een review te plaatsen moet je <a href="{{route('login')}}">inloggen</a>.</p>

        @endauth
    </div>
@endsection