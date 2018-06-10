<form class="search" action="{{ route('home') }}" method="get">
    @csrf
        <div class="control has-addon">
            <span class="control-addon radius-top-left radius-bottom-left">
                Wat zoek je?
            </span>
            <input class="control-field" type="text" id="search" name="search" placeholder="Zoeken..." value="{{ isset($search)? $search : '' }}">
            <input class="control-field" type="text" id="city" name="city" placeholder="Gemeente" value="{{ old('city', isset($city)? $city : $city_name) }}">
            <button type="submit" class="control-addon radius-top-right radius-bottom-right">
                <i class="fa fa-search"></i>
            </button>
        </div>
        
        {{-- <div class="control has-addon">
            <span class="control-addon addon-left radius-bottom-left">
                Welke gemeente?
            </span>
            <input class="control-field" type="text" id="city" name="city" placeholder="Gemeente" value="{{ old('city', isset($city)? $city : $city_name) }}">
            <button type="submit" class="control-addon radius-right">
                <i class="fa fa-search"></i>
            </button>
        </div> --}}

        {{-- <div class="cell medium-5">
            <label for="city">Gemeente</label>
            
            <input type="text" id="city" name="city" placeholder="Gemeente" value="{{ old('city', isset($city)? $city : $city_name) }}">

        </div>
        <div class="cell medium-2">
            <button type="submit" class="button">Zoeken</button>
        </div> --}}
</form>