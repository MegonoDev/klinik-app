<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> @yield('title')- {{ config('app.name', 'Laravel') }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Spesific Styles -->
        @stack('styles')
    </head>
    <body class="bg-[#F5F5F9] min-h-screen font-poppins antialiased">
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
        <!-- Spesific Scripts -->
        @stack('scripts')
    </body>
</html>