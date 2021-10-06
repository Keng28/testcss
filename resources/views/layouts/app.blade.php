<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head class="header fixed-top">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


         <!-- Favicons -->
        <link href="{{asset('img/genomics.png')}}" rel="icon">
        <link href="{{asset('img/genomics.png')}}" rel="apple-touch-icon">


        <title>{{ config('app.name', 'Genome') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Styles -->

        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">       
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    
        <!-- Scripts -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
        @livewire('navigation-menu')
    </head>


    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            


        <!-- Page Heading -->
            @if (isset($header))
                <header class="header fixed-top">
                    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                        {{ $header }}
                    </div>
                </header>
            @endif    

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Keng</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Keng</a>
        </div>
        </div>
        </footer><!-- End Footer -->
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
