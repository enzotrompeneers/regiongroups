<form action="{{ route('home') }}" method="get">
    @csrf
    <label for="search">Wat zoek je?</label>
    <input type="text" id="search" name="search" placeholder="Zoeken" value="{{ isset($search)? $search : '' }}">
    <label for="city">Gemeente</label>
    <input type="text" id="city" name="city" placeholder="Gemeente" value="{{ isset($city)? $city : $city_name }}">

    <button type="submit">Zoeken</button>
</form>