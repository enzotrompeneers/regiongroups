@extends('layouts.web.master')

@section('content')
    <h1>Create portfolio page</h1>

    <form action="{{ route('portfolio.store') }}" method="post">
        {{ csrf_field() }}
        <label for="logo">Logo</label>
        <input type="text" id="logo" name="logo" placeholder="Logo">
        <br>

        <label for="name">Naam</label>
        <input type="text" id="name" name="name" placeholder="Naam" value="{{ old('name') }}">
        <br>

        <label for="description">Beschrijving</label>
        <textarea name="description" id="description">{{ old('description') }}</textarea>
        <br>

        <label for="street">Straat</label>
        <input type="text" id="street" name="street" placeholder="Straat" value="{{ old('street') }}">
        <br>

        <label for="housenumber">Huisnummer</label>
        <input type="text" id="housenumber" name="housenumber" placeholder="Huisnummer" value="{{ old('housenumber') }}">
        <br>

        <label for="postal_code">Postcode</label>
        <input type="text" id="postal_code" name="postal_code" placeholder="Postcode" value="{{ old('postal_code') }}">
        <br>

        <label for="city">Stad/Dorp</label>
        <input type="text" id="city" name="city" placeholder="Stad/Dorp" value="{{ old('city') }}">
        <br>

        <label for="country">Land</label>
        <input type="text" id="country" name="country" placeholder="Land" value="{{ old('country') }}">
        <br>

        <label for="phone">Telefoon/Mobiel</label>
        <input type="text" id="phone" name="phone" placeholder="Telefoon/Mobiel" value="{{ old('phone') }}">
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <br>

        <label for="external">Website Url</label>
        <input type="text" id="external" name="external" placeholder="Website Url" value="{{ old('external') }}">
        <br>

        <button type="submit">Publiceren</button>
    </form>

    @include('partials.errors')
    
    
    
@endsection