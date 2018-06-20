@extends('layouts.web.master')

@section('pre-scripts')
    <!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=bysirbs0pl9dbkqas9tl1scw9b18nv9vkbng812xlnxue6qs"></script>-->
    <script type="text/javascript" src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({ 
        selector:'#description',
        height: 400
        });
    </script>
@endsection

@section('content')
    <form action="{{ route('portfolio.update', $portfolio->slug) }}" method="post" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
        <div class="portfolio-header">
            <div class="grid-container">
                    <h2 class="text-center">Wijzig portfolio</h2>
                    <hr>
                    @include('partials.errors')
                <div class="flex-horizontal">
                        <?php $logo_image = $portfolio->logo ? Storage::url($portfolio->logo) : "img/logo-avatar.svg";?>
                        <div class="logo-image-big no-image" style="background-image:url(../<?php echo $logo_image ?>);">
                            <input class="inputfile" type="file" accept="image/*" id="logo" name="logo" placeholder="Logo" onchange="showUploadedImage(this);">
                        </div>
                        
                    <div class="flex-center padding-left">
                        <div class="floated-label-wrapper">
                            <label for="name">Naam</label>
                            <input type="text" id="name" name="name" placeholder="Naam" value="{{ old('name', $portfolio->name) }}" required autofocus>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

        <div class="portfolio-content">
            <div class="grid-container">
                <div class="grid-x grid-margin-x grid-margin-y">
                    <div class="cell large-12">
                        <div class="portfolio-description">
                            <label for="description">Beschrijving</label>
                            <textarea name="description" id="description">{{ old('description', $portfolio->description)}}</textarea>
                        </div>
                    </div>

                    <div class="cell medium-6 large-3">
                        <div class="portfolio-link">
                            <div class="portfolio-form">
                                <div class="flex-center">
                                    <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                    <div class="floated-label-wrapper">
                                        <label for="street">Straat</label>
                                        <input type="text" id="street" name="street" placeholder="Straat" value="{{ old('street', $portfolio->street) }}" required>
                                    </div>
                                    <div class="floated-label-wrapper">
                                        <label for="housenumber">Huisnummer</label>
                                        <input type="text" id="housenumber" name="housenumber" placeholder="Huisnummer" value="{{ old('housenumber', $portfolio->housenumber) }}" required>
                                    </div>
                                    <div class="floated-label-wrapper">
                                        <label for="postal_code">Postcode</label>
                                        <input type="text" id="postal_code" name="postal_code" placeholder="Postcode" value="{{ old('postal_code', $portfolio->postal_code) }}" required>
                                    </div>
                                    <div class="floated-label-wrapper">
                                        <label for="city">Gemeente</label>
                                        <input type="text" id="city" name="city" placeholder="Gemeente" value="{{ old('city', $portfolio->city) }}" required>
                                    </div>
                                    <div class="floated-label-wrapper">
                                        <label for="country">Land</label>
                                        <input type="text" id="country" name="country" placeholder="Land" value="{{ old('country', $portfolio->country) }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cell medium-6 large-3">
                        <div class="portfolio-link">
                            <div class="portfolio-form">
                                <div class="flex-center">
                                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                                    <div class="floated-label-wrapper">
                                        <label for="phone">Telefoon/Gsm</label>
                                        <input type="text" id="phone" name="phone" placeholder="Telefoon/Gsm" value="{{ old('phone', $portfolio->phone) }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="cell medium-6 large-3">
                        <div class="portfolio-link">
                            <div class="portfolio-form">
                                <div class="flex-center">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <div class="floated-label-wrapper">
                                        <label for="email">E-mailadres</label>
                                        <input type="email" id="email" name="email" placeholder="E-mailadres" value="{{ old('email', $portfolio->email) }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cell medium-6 large-3">
                        <div class="portfolio-link">
                            <div class="portfolio-form">
                                <div class="flex-center">
                                    <i class="fa fa-link" aria-hidden="true"></i>
                                    <div class="floated-label-wrapper">
                                        <label for="external">E-Website Url</label>
                                        <input type="text" id="external" name="external" placeholder="Website Url" value="{{ old('external', $portfolio->external) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell large-3 medium-6 padding-bottom">
                        <button type="submit" class="button expanded">Wijziging opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('post-scripts')
<script>
    function showUploadedImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('.logo-image-big')
                .css('background-image', 'url(' + e.target.result + ')');
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection