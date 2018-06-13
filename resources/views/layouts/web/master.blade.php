<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.web.meta')
        @include('layouts.web.links')
        @yield('pre-scripts')
    </head>
    <body>
        <div class="flex-container">
            <header>
                @include('layouts.web.header')
                @include('partials.sessions')
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                @include('layouts.web.footer')
                @include('layouts.web.scripts')
                @yield('post-scripts')
            </footer>
        </div>
    </body>
</html>