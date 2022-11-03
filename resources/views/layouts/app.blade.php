<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> @yield('title')- {{ config('app.name', 'Laravel') }}</title>

        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Spesific Styles -->
        @stack('styles')
    </head>
    <body class="bg-[#F5F5F9] min-h-screen font-publicSans antialiased">
        <div class="flex flex-col md:flex-row">
            <!-- Sidebar -->
            @include('layouts/partials/sidebar')
            <!-- /Sidebar -->
            <div class="w-full md:flex-1">
                <!-- Navbar -->
                @include('layouts/partials/navbar')
                <!-- /Navbar -->
                <main class="mx-6 my-4">
                    @yield('content')
                </main>
            </div>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
        {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
        <script src="{{asset('vendor/jquery/jquery-3.6.1.min.js')}}"></script>
        <script src="{{asset('vendor/flowbite/flowbite.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <!-- Spesific Scripts -->
        @stack('scripts')
    </body>
</html>