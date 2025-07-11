<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vintage Fashion - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="img/logoo.png">

     <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @vite('resources/css/app.css')
    <style>
    .btn {
    margin-top: 60px;
    width: 250px;
    height: 71px;
}

.btn-produk {
    width: fit-content;
    padding: 16px 24px;
    border-radius: 32px;
    border: 1px solid #F97316;
    color: #F97316;
    font-weight: 500;
    display: flex;
    position: relative;
    overflow: hidden;
    transition: 0.3s ease;
    text-decoration: none;
}

.btn-produk p{
    transition: 0.3s ease;
    margin-left: 30px;
    z-index: 2;
}

.btn-produk:hover{
    transition: 0.3s ease;
    color: #fff;
}

.btn-produk:hover p{
    transition: 0.3s ease;
    transform: translateX(-15px);
}

.btn-produk:hover .dot{
    width: 250px;
    height: 250px;
    transform: scale(1.5) translateY(-20%) translateX(10%);
    left: 0%;
    transition: 0.5s ease;
    background-color: #F97316;
}
.dot {
    width: 18px;
    height: 18px;
    border-radius: 100%;
    background-color: #F97316;
    position: absolute;
    z-index: 1;
    left: 15px;
    transition: 0.5s ease;
}

    </style>
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
