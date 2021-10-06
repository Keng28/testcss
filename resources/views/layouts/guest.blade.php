<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">       
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
          <!-- Vendor JS Files -->
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
            <script src="{{ asset('vendor/aos/aos.js')}}"></script>
            <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
            <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
            <script src="{{ asset('vendor/purecounter/purecounter.js')}}"></script>
            <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
            <script src="{{ asset('vendor/glightbox/js/glightbox.min.js')}}"></script>

            <!-- Template Main JS File -->
            <script src="{{ asset('js/main.js')}}"></script>

</html>
