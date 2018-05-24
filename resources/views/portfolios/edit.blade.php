@extends('layouts.web.master')

@section('content')
    <h1>Portfolio bewerken</h1>

    <form action="{{ route('portfolio.update', $portfolio->name) }}" method="post">
        {{ method_field('PATCH') }}
        @csrf
        <label for="logo">Logo</label>
        <input type="text" id="logo" name="logo" placeholder="Logo" value="{{ old('logo') }}">
        <br>

        <label for="name">Naam</label>
    <input type="text" id="name" name="name" placeholder="Naam" value="{{ old('name'), $portfolio->name }}">
        <br>

        <label for="description">Beschrijving</label>
        <textarea name="description" id="description">{{ $portfolio->description}}</textarea>
        <br>

        <label for="street">Straat</label>
        <input type="text" id="street" name="street" placeholder="Straat" value="{{ $portfolio->street }}">
        <br>

        <label for="housenumber">Huisnummer</label>
        <input type="text" id="housenumber" name="housenumber" placeholder="Huisnummer" value="{{ $portfolio->housenumber }}">
        <br>

        <label for="postal_code">Postcode</label>
        <input type="text" id="postal_code" name="postal_code" placeholder="Postcode" value="{{ $portfolio->postal_code }}">
        <br>

        <label for="city">Stad/Dorp</label>
        <input type="text" id="city" name="city" placeholder="Stad/Dorp" value="{{ $portfolio->city }}">
        <br>

        <label for="country">Land</label>
        <input type="text" id="country" name="country" placeholder="Land" value="{{ $portfolio->country }}">
        <br>

        <label for="phone">Telefoon/Mobiel</label>
        <input type="text" id="phone" name="phone" placeholder="Telefoon/Mobiel" value="{{ $portfolio->phone }}">
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" value="{{ $portfolio->email }}">
        <br>

        <label for="external">Website Url</label>
        <input type="text" id="external" name="external" placeholder="Website Url" value="{{ $portfolio->external }}">
        <br>

        <button type="submit">Bewerken</button>
    </form>

    @include('partials.errors')
    
    
    
@endsection