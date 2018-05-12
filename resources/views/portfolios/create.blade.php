@extends('layouts.web.master')

@section('content')
    <h1>Create portfolio page</h1>

    <form action="/portfolios" method="post">
        {{ csrf_field() }}
        <label for="logo">Logo</label>
        <input type="text" id="logo" name="logo" placeholder="Logo">
        <br>

        <label for="name">Naam</label>
        <input type="text" id="name" name="name" placeholder="Naam">
        <br>

        <label for="description">Beschrijving</label>
        <textarea name="description" id="description"></textarea>
        <br>

        <label for="street">Straat</label>
        <input type="text" id="street" name="street" placeholder="Straat">
        <br>

        <label for="housenumber">Huisnummer</label>
        <input type="text" id="housenumber" name="housenumber" placeholder="Huisnummer">
        <br>

        <label for="postal_code">Postcode</label>
        <input type="text" id="postal_code" name="postal_code" placeholder="Postcode">
        <br>

        <label for="city">Stad/Dorp</label>
        <input type="text" id="city" name="city" placeholder="Stad/Dorp">
        <br>

        <label for="country">Land</label>
        <input type="text" id="country" name="country" placeholder="Land">
        <br>

        <label for="phone">Telefoon/Mobiel</label>
        <input type="text" id="phone" name="phone" placeholder="Telefoon/Mobiel">
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email">
        <br>

        <label for="external">Website Url</label>
        <input type="text" id="external" name="external" placeholder="Website Url">
        <br>

        <label for="subscription">Abonnement</label>
        <input type="text" id="subscription" name="subscription" placeholder="Abonnement">
        <br>

        <label for="layout">Layout</label>
        <input type="text" id="layout" name="layout" placeholder="Layout">
        <br>

        <button type="submit">Publiceren</button>
    </form>

    @include('partials.errors')
    
    
    
@endsection