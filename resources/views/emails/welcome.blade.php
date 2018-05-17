@component('mail::message')
# Welkom {{$user->name}}

Bedankt voor het registreren!

@component('mail::button', ['url' => 'https://regiongroups.com'])
Ga naar Regiongroups
@endcomponent

@component('mail::panel', ['url' => 'https://regiongroups.com'])
paneel
@endcomponent

Bedankt,<br>
{{ config('app.name') }}
@endcomponent
