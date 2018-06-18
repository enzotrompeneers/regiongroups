<div class="wrapper">
        <ul class="bg-bubbles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
    </ul>
</div>
<h1>Zoek naar <span class="typer"></span></h1>
<div id="typed-strings">
    <p>een stielman in uw gemeente...</p>
    <p>een bedrijf in uw gemeente...</p>
    <p>een winkel in uw gemeente...</p>
    <p>een restaurant in uw gemeente...</p>
</div>
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
                    <button type="submit" class="button expanded control-addon radius-right btn-search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
    

