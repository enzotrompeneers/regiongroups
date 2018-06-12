<a class="media" href="{{ route('portfolio.show', $portfolio->slug) }}">
    <div class="media-left">
        <?php $logo_image = $portfolio->logo ? Storage::url($portfolio->logo) : "img/logo-avatar.svg";?>
        <div class="logo-image" style="background-image:url(<?php echo $logo_image ?>);"></div>
    </div>
    <div class="media-content">
        <h4>{{ $portfolio->name }}</h4>
        <p>
            Beschrijving: {{ $portfolio->description }} <br>
        </p>
        <p>
            Regio: {{ $portfolio->city }}
        </p>
    </div>
    <div class="media-right">
    </div>
</a>