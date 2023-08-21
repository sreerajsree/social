<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

       <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">
        

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="p-0">
            <div class="text-gray-900 antialiased">
                {{ $slot }}
            </div>
        </div>

        <!-- Page Footer -->
        <footer class="main-footer">
                @include('partials.footer.footer')
            <!-- Footer Copyright -->
            <section class="bg-gray-900 hidden md:block">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white">
                    @include('partials.footer.copyright')
                </div>
            </section>
        </footer>
    </body>
</html>
