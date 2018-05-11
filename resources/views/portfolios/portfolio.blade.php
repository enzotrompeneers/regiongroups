<a href="/portfolio/{{ $portfolio->id }}">
    <h3>{{ $portfolio->name }}</h3>
</a>
<p>{{ $portfolio->description }}</p>
<p>{{ $portfolio->created_at->toFormattedDateString() }}</p>