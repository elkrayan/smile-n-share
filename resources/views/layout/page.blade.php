<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smile'N'Share | Accueil</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    @vite('resources/scss/app.scss')
</head>
<body id="home">
    <nav class="p-2 px-4">
        <a href="" id="logo" class="font-serif color-brand">
            <img src="{{ asset('img/logo_color_row.png') }}" alt="">
        </a>
        <div id="hamburger" class="hover:cursor-pointer">
            <div></div>
            <div></div>
        </div>
    </nav>
    <div class="mobile-nav hidden">
        <span id="close_mobile_nav" class="material-symbols-outlined">close</span>
        <header>
            <a href="" id="logo">
                <img src="{{ asset('img/logo_color_row.png') }}" alt="">
            </a>
        </header>

        <nav>
            <ul class="vertical-list">
                <li><a href="">Accueil</a></li>
                <li><a href="">Formules</a></li>
                <li><a href="">Accessoires</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </div>

    @yield('home')
</body>
</html>
