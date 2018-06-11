<a class="media" href="{{ route('portfolio.show', $portfolio->slug) }}">
    <div class="media-left">
        <img src="http://placehold.it/100x100" alt="placeholder">
    </div>
    <div class="media-content">
        <h4>{{ $portfolio->name }}</h4>
        <p>
            Beschrijving: {{ $portfolio->description }} <br>
        </p>
        <p>
            Regio: {{ $portfolio->city }}
        </p>
    </div>
    <div class="media-right">
    </div>
</a>