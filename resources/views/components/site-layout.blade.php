@props(['title', 'description'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Site' }} | PT. PERA ABADI SENTAUSA</title>

        <meta name="description"
            content="{{ $description ??
                'PERA provides a complete portfolio of high-quality cement modifiers for our factory blended protective decorative coatings and premixed concrete toppings" />
                    <meta name="keywords' }}"
            content="Advanced Concrete Technologies, Innovative admixture technologies for concrete and cementitious mortar products, PT. Pera Abadi Sentausa, PERA Admixtures and cement enhancer technologies" />

        <link rel="shortcut icon" href="{{ asset('uploads/images/PERA Video 1.jpg') }}">
        <link rel="icon" href="{{ asset('uploads/images/PERA Video 1.jpg') }}" type="image/x-icon" />

        <meta property="og:locale" content="en_GB" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="PT. PERA ABADI SENTAUSA" />
        <meta property="og:description"
            content="PERA provides a complete portfolio of high-quality cement modifiers for our factory blended protective decorative coatings and premixed concrete toppings" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:site_name" content="PT. PERA ABADI SENTAUSA" />
        <meta property="og:image" content="{{ asset('uploads/images/PERA Video 1.jpg') }}" />


        <meta name="twitter:description"
            content="PERA provides a complete portfolio of high-quality cement modifiers for our factory blended protective decorative coatings and premixed concrete toppings" />
        <meta name="twitter:title" content="PT. PERA ABADI SENTAUSA" />
        <meta name="twitter:image" content="{{ asset('uploads/images/PERA Video 1.jpg') }}" />


        <!-- Unicons CSS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

        <!-- Slick Default CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('uploads/slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('uploads/slick/slick-theme.css') }}">

        <!-- Google Font  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:bold">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:semibold">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">

        <!-- Font Awesome  -->
        <script src="https://kit.fontawesome.com/da308d724e.js" crossorigin="anonymous"></script>

        <!-- Theme CSS  -->
        <link rel="stylesheet" href="{{ asset('css/static/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/static/pre-footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/static/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/static/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/static/whatsapp-floating.css') }}">

        <!--Include JQuery-->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
        @stack('head')
    </head>

    <body>
        {{ $slot }}
        <div id="overlayModal" class="overlay-modal"></div>
        <x-whatsapp-floating />
        <!-- Slick Jquery  -->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

        <!-- Slick Js  -->
        <script src="{{ asset('uploads/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>


        <!-- Theme Js  -->
        <script src="{{ asset('js/static/navbar.js') }}"></script>
        <script src="{{ asset('js/static/accordion.js') }}"></script>
        <script src="{{ asset('js/static/slick-config.js') }}"></script>
        @stack('body')
    </body>

</HTML>
