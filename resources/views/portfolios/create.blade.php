@extends('layouts.web.master')
@section('content')
    <h1>Create portfolio page</h1>

    <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="logo">Logo</label>
        <div class="logo-image"></div>
        <input type="file" accept="image/*" id="logo" name="logo" placeholder="Logo" onchange="showUploadedImage(this);">
        
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

        <label for="city">Gemeente</label>
        <input type="text" id="city" name="city" placeholder="Stad/Dorp" value="{{ old('city') }}">
        <br>

        <label for="country">Land</label>
        <input type="text" id="country" name="country" placeholder="Land" value="{{ old('country') }}">
        <br>

        <label for="phone">Telefoon/Mobiel</label>
        <input type="text" id="phone" name="phone" placeholder="Telefoon/Mobiel" value="{{ old('phone') }}">
        <br>

        <label for="email">E-mailadres</label>
        <input type="email" id="email" name="email" placeholder="E-mailadres" value="{{ old('email') }}">
        <br>

        <label for="external">Website Url</label>
        <input type="text" id="external" name="external" placeholder="Website Url" value="{{ old('external') }}">
        <br>

        <button type="submit">Publiceren</button>
    </form>
    
    @include('partials.errors')
    
@endsection

@section('post-scripts')
<script>
    function showUploadedImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('.logo-image')
                .css('background-image', 'url(' + e.target.result + ')');
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection

