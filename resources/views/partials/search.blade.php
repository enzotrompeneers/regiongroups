<form class="search-form" action="{{ route('home') }}" method="get">
    @csrf
    <div class="grid-x">
        <div class="cell medium-6 small-12">
            <div class="control has-addon">
                <span class="control-addon radius-left">
                    Zoeken
                </span>
                <input class="control-field" type="text" id="search" name="search" placeholder="Zoeken..." value="{{ isset($search)? $search : '' }}">
            </div>
        </div>
    
        <div class="cell medium-5 small-12">
            <div class="control has-addon">
                <span class="control-addon">
                    Gemeente
                </span>
                <input class="control-field" type="text" id="city" name="city" placeholder="Gemeente" value="{{ old('city', isset($city)? $city : $city_name) }}">
            </div>
        </div>
                
        <div class="cell medium-1 small-12">
            <div class="control has-addon">
                <button type="submit" class="button expanded control-addon radius-right ">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</form>