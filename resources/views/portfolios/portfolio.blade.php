<a href="{{ route('portfolio.show',$portfolio->name) }}">
    <p>
        <b>Naam: {{ $portfolio->name }}</b> <br>
        Beschrijving: {{ $portfolio->description }} <br>
        Regio: {{ $portfolio->city }}
    </p>
</a>