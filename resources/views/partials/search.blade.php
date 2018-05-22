<form action="{{ route('home') }}" method="get">
    @csrf
    <input type="text" name="search" placeholder="Zoeken" value="{{ isset($search)? $search : '' }}">

    <button type="submit">Zoeken</button>
</form>