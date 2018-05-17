<ul>
    <li><a href="{{ route('home') }}">Alles</a></li>
    @foreach($cities as $city)
    <li><a href="{{ route('city.show', $city->name) }}">{{ $city->name }}: {{ $city->amount }}</a></li>
    @endforeach
</ul>