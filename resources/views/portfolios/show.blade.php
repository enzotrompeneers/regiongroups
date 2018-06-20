@extends('layouts.web.master')

@section('content')
    @auth
        @if($portfolio->user_id === Auth::user()->id)
            <div class="portfolio-actions">
                <div class="grid-container padding-top">
                    <a class="button" href="{{ route('portfolio.edit', $portfolio->slug) }}">Wijzigen</a>
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
                </div>
            </div>
        @endif
    @endauth

    <div class="portfolio-header">
        <div class="grid-container">
            <div class="flex-horizontal">
                <?php $logo_image = $portfolio->logo ? Storage::url($portfolio->logo) : "img/logo-avatar.svg";?>
                <div class="logo-image-big" style="background-image:url(<?php echo $logo_image ?>);"></div>
                <h2 class="flex-center">{{ ucfirst($portfolio->name) }}</h2>
            </div>    
        </div>
    </div>
    <div class="portfolio-content">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="cell large-6">
                    <div class="portfolio-description">
                        <p>{!! $portfolio->description !!}</p>
                    </div>
                </div>
                <div class="cell large-6 contact-form">
                    <form class="callout callout-big" action="#" method="post">
                        @csrf
                        <h2>Contacteren</h2>
                        <div class="floated-label-wrapper">
                            <label for="email">E-mailadres</label>
                            <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="E-mailadres" required autofocus autocomplete="off">
                        </div>

                        <div class="floated-label-wrapper">
                            <label for="subject">Onderwerp</label>
                            <input type="text" id="subject" value="{{ old('subject') }}" name="subject" placeholder="Onderwerp" required autocomplete="off">
                        </div>

                        <div class="floated-label-wrapper">
                            <textarea rows="4" name="message" placeholder="Bericht..."></textarea>
                        </div>


        
                        <button type="submit" class="button expanded">Verzenden</button>
                        
                        @include('partials.errors')  
                    </form>
                </div>

                <div class="cell medium-6 large-3">
                    <a class="portfolio-link" href="https://www.google.com/maps/search/?api=1&query={{ $portfolio->street }}%20{{ $portfolio->housenumber }}%20{{ $portfolio->postal_code }}%20{{ $portfolio->city }}%20{{ $portfolio->country }}" target="_blank">
                        <div class="portfolio-box">
                            <div class="flex-center">
                                <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                <p>
                                    {{ ucfirst($portfolio->street) }} {{ ucfirst($portfolio->housenumber) }}, <br>
                                    {{ $portfolio->postal_code }} {{ ucfirst($portfolio->city) }} {{ ucfirst($portfolio->country) }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cell medium-6 large-3">
                    <a class="portfolio-link" href="tel:{{ $portfolio->phone }}" target="_blank">
                        <div class="portfolio-box">
                            <div class="flex-center">
                                <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                                <p>
                                    {{ $portfolio->phone }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                    
                <div class="cell medium-6 large-3">
                    <a class="portfolio-link" href="mailto:{{ $portfolio->email }}" target="_blank">
                        <div class="portfolio-box">
                            <div class="flex-center">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <p>
                                    {{ ucfirst($portfolio->email) }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                @if(count($portfolio->external))
                    <div class="cell medium-6 large-3">
                        <a class="portfolio-link" href="{{ $portfolio->external }}" target="_blank">
                            <div class="portfolio-box">
                                <div class="flex-center">
                                    <i class="fa fa-link" aria-hidden="true"></i>
                                    <p>
                                        {{ $portfolio->external }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif

                

                <div class="cell reviews">
                    <h3>Review schrijven</h3>
                    @auth
                        @include('partials.review')
                    @else
                        <p>Om een review te plaatsen moet je <a href="{{route('login')}}">inloggen</a>.</p>
                    @endauth

                    <h3>Reviews</h3>
                    @if(count($portfolio->reviews))
                        @foreach($portfolio->reviews->sortByDesc('created_at') as $review)
                            <p>
                                @for ($i = 0; $i < $review->rating; $i++)
                                    <span class="fa fa-star checked"></span>
                                @endfor

                                @for ($j = $review->rating; $j < 5; $j++)
                                    <span class="fa fa-star"></span>
                                @endfor
                                <br>
                                {{ ucfirst($review->body) }} <br>
                            <br>
                                Van: {{$review->user->name}} {{ $review->created_at->diffForHumans() }}
                            </p>
                        @endforeach
                    @else
                        <p>Schrijf de eerste review voor {{ ucfirst($portfolio->name) }}.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
 
      
        
