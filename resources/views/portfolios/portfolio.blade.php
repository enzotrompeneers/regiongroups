<div class="posts-panel">
    <header class="panel-header">
        <h1 class="panel-title">Zoek naar <span class="typer"></span></h1>
        <div id="typed-strings">
            <p>een stielman in uw gemeente...</p>
            <p>een bedrijf in uw gemeente...</p>
            <p>een winkel in uw gemeente...</p>
        </div>
    </header>

    <section class="search">     
        @include('partials.search')
    </section>

    <div class="panel-content">
        <section class="posts-list">
            <div class="grid-x grid-margin-x grid-margin-y">
                @foreach($portfolios as $portfolio)
                    <div class="cell large-6">
                        <div class="post-item">
                            <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="post-thumbnail">
                                <?php $logo_image = $portfolio->logo ? Storage::url($portfolio->logo) : "img/logo-avatar.svg";?>
                                <div class="logo-image" style="background-image:url(../<?php echo $logo_image ?>);"></div>
                            </a>
                            <div class="post-text">
                                <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                    <h3 class="post-title">{{ ucfirst($portfolio->name) }}</h3>
                                </a>
                                <div class="post-meta">
                                    <span class="meta">
                                        <span class="meta-icon fa fa-map-marker" aria-hidden="true"></span>
                                    
                                        <span class="meta-text"> {{ ucfirst($portfolio->city) }}, {{ ucfirst($portfolio->country) }}</span>
                                    </span>
                                    <span class="meta">
                                        <span class="meta-icon fa fa-phone" aria-hidden="true"></span>
                                        <span class="meta-text">{{ ucfirst($portfolio->phone) }}</span>
                                    </span>
                                </div>

                                <div class="post-summary">
                                    <p>
                                        {{ ucfirst($portfolio->description) }} 
                                    </p>
                                    <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="post-read-more">Bekijken<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

