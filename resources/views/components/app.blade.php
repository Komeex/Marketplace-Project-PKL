<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden bg-[#f5f5f5] scroll-smooth">

    @include('partials.navbar')
        @yield('content')
    @include('partials.footer')

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.getElementById('nav-menu');

        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('hidden');
        });


    </script>
</body>

</html>
