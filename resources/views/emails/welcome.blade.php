@component('mail::message')
# Welkom {{$user->name}}

Bedankt voor het registreren!

@component('mail::button', ['url' => 'https://cityofcompanies.com'])
Ga naar Cityofcompanies
@endcomponent

Bedankt,<br>
{{ config('app.name') }}
@endcomponent
