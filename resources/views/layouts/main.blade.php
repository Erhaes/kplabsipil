<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Lab Teknik Sipil UNSOED</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">
    @include('layouts.header')
    <main class="flex-grow">
        @yield('content')
    </main>
    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>