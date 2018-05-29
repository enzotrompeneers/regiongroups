<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Regiongroups</title>

<script>
    var Cityofcompanies = {
        csrfToken: "{{ csrf_token() }}",
        stripeKey: "{{ config('services.stripe.key') }}"
    };
</script>
