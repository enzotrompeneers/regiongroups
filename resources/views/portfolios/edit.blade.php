@extends('layouts.web.master')

@section('content')
    <h1>Portfolio bewerken</h1>

    <form action="{{ route('portfolio.update', $portfolio->slug) }}" method="post" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
        <label for="logo">Logo</label>
        <?php $logo_image = $portfolio->logo ? Storage::url($portfolio->logo) : "img/logo-avatar.svg";?>
        <div class="logo-image" style="background-image:url(../<?php echo $logo_image ?>);"></div>
        <input type="file" accept="image/*" id="logo" name="logo" placeholder="Logo" onchange="showUploadedImage(this);">
        <br>

        <label for="name">Naam</label>
        <input type="text" id="name" name="name" placeholder="Naam" value="{{ old('name', $portfolio->name) }}">
        <br>

        <label for="description">Beschrijving</label>
        <textarea name="description" id="description">{{ old('description', $portfolio->description)}}</textarea>
        <br>

        <label for="street">Straat</label>
        <input type="text" id="street" name="street" placeholder="Straat" value="{{ old('street', $portfolio->street) }}">
        <br>

        <label for="housenumber">Huisnummer</label>
        <input type="text" id="housenumber" name="housenumber" placeholder="Huisnummer" value="{{ old('housenumber', $portfolio->housenumber) }}">
        <br>

        <label for="postal_code">Postcode</label>
        <input type="text" id="postal_code" name="postal_code" placeholder="Postcode" value="{{ old('postal_code', $portfolio->postal_code) }}">
        <br>

        <label for="city">Gemeente</label>
        <input type="text" id="city" name="city" placeholder="Stad/Dorp" value="{{ old('city', $portfolio->city) }}">
        <br>

        <label for="country">Land</label>
        <input type="text" id="country" name="country" placeholder="Land" value="{{ old('country', $portfolio->country) }}">
        <br>

        <label for="phone">Telefoon/Mobiel</label>
        <input type="text" id="phone" name="phone" placeholder="Telefoon/Mobiel" value="{{ old('phone', $portfolio->phone) }}">
        <br>

        <label for="email">E-mailadres</label>
        <input type="email" id="email" name="email" placeholder="E-mailadres" value="{{ old('email', $portfolio->email) }}">
        <br>

        <label for="external">Website Url</label>
        <input type="text" id="external" name="external" placeholder="Website Url" value="{{ old('external', $portfolio->external) }}">
        <br>

        <button type="submit">Bewerken</button>
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