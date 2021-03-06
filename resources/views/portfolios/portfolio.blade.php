<div class="posts-panel">
    <div class="panel-content">
        <section class="posts-list">
            <div class="grid-x grid-margin-x grid-margin-y">
                @foreach($portfolios as $portfolio)
                    <div class="cell large-6 portfolio">
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
                                        {{ strip_tags(html_entity_decode(ucfirst($portfolio->description))) }} 
                                    </p>
                                    <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="post-read-more">Bekijken<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="cell text-center">
                        {{$portfolios->links()}}
                </div>
            </div>
        </section>
    </div>
</div>

