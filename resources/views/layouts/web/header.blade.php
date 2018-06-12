<section class="header">
    <div class="grid-container">
        <div class="flex-space-between">
            <a href="{{ route('home') }}">
                <div class="logo">
                    <img src="{{ asset("img/logo-border-dark.svg") }}" alt="city of companies">
                    <h1>City of <span>Companies</span></h1>
                </div>
            </a>
            <div class="navigation flex-vertical">
                <ul class="dropdown menu" data-dropdown-menu>
                    @include('partials.navigation')
                </ul>
            </div>
            @include('partials.authentication')
        </div>
    </div>
</section>
