<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <meta name="description" content="Broere staat klaar voor al uw vliegpassages">
        <meta name="keywords" content="Broere Vliegpassages, home, zakelijk reisbureau">
        <meta property="og:description" content="Broere staat klaar voor al uw vliegpassages">
        <meta property="og:title" content="Home | Broere Vliegpassages">
        <meta property="og:type" content="page">
        <meta property="og:locale" content="nl-NL">
        <meta property=":locale:alternate" content="nl-NL">
        <meta property=":locale:alternate" content="en-US">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ url()->current() }}/images/logo/broere-logo.png">

        <meta name="twitter:image" content="{{ url()->current() }}/images/logo/broere-logo.png">
        <meta name="twitter:description" content="Broere staat klaar voor al uw vliegpassages">
        <meta name="twitter:title" content="Home | Broere Vliegpassages">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="https://broerevliegpassages.nl">
        <meta name="twitter:site" content="https://broerevliegpassages.nl">

		<link rel="icon" type="image/png" href="images/logo/broere-logo-klein.png">

		<title>Broere Vliegpassages - Vertrouwd en vakkundig</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body class="antialiased">

    {{ $slot}}

	    <script src="{{ asset('/js/app.js') }}"></script>
	    <script src="{{ asset('/js/main.js') }}"></script>

		<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
            var notyf = new Notyf({dismissible: true,duration:10000})
        </script>
        @if (session()->has('success'))
        <script>
            notyf.success('{{ session('success') }}')
        </script>
        @endif

        @if ($errors->any())
            @foreach($errors->all() as $error)

                <script>
                    notyf.error('{!! $error !!}')
                </script>

            @endforeach
        @endif
        <!--  SCRIPTS End  -->

    </body>
</html>
