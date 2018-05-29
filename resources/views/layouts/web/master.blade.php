<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.web.meta')
        @include('layouts.web.links')
        @yield('pre-scripts')
    </head>
    <body>
        @include('layouts.web.header')
        @include('layouts.web.navigation')
        @include('partials.sessions')
        @yield('content')
        @include('layouts.web.footer')
        @include('layouts.web.scripts')
        @yield('post-scripts')
    </body>
</html>