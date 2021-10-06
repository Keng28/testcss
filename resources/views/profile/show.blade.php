<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">       
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
            <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
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