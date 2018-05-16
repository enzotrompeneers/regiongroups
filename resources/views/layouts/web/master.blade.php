<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.web.meta')
        @include('layouts.web.links')
    </head>
    <body>
        @include('layouts.web.header')
        @include('layouts.web.navigation')
        @yield('content')
        @include('layouts.web.footer')
        @include('layouts.web.scripts')
    </body>
</html>