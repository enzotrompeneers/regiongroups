<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>City of companies</title>

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset("img/>favicon/apple-touch-icon.png") }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset("img/favicon/favicon-32x32.png") }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset("img/favicon/favicon-16x16.png") }}">
<link rel="manifest" href="{{ asset("img/favicon/site.webmanifest") }}">
<link rel="mask-icon" href="{{ asset("img/favicon/safari-pinned-tab.svg") }}" color="#2ca6fc">
<meta name="msapplication-TileColor" content="#2ca6fc">
<meta name="theme-color" content="#ffffff">


<script>
    var Cityofcompanies = {
        csrfToken: "{{ csrf_token() }}",
        stripeKey: "{{ config('services.stripe.key') }}"
    };
</script>
