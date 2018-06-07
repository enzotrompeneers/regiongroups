<section class="header">
    <div class="grid-container">
        <div class="flex-space-between">
            <a href="{{ route('home') }}">
                <div class="logo">
                    <img src="{{ asset("img/logo-border-dark.svg") }}" alt="city of companies">
                    <h1>City of <span>Companies</span></h1>
                </div>
            </a>
            @include('partials.navigation')
            @include('partials.authentication')
        </div>
    </div>
</section>