@component('mail::message')
# Goeiedag,

Je hebt een mail ontvangen van een mogelijke klant!

## Onderwerp: {{ $email_subject }}

## Bericht: 

{{ $email_message }}

## van: {{ $email_sender }}

@component('mail::button', ['url' => 'https://cityofcompanies.com'])
Ga naar Cityofcompanies
@endcomponent

Graag gedaan,<br>
{{ config('app.name') }}
@endcomponent


