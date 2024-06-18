<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2L</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <nav>
        @if(auth()->check())
            <a href="/utilisateurs">
                <img src="/asset/Blason_M2L.png" alt="logoM2L">
            </a>
        @else
            <img src="/asset/Blason_M2L.png" alt="logoM2L">
        @endif
        <h1>Maison des ligues</h1>
        <ul>
            <li><a href="/mon-compte">MODIFIER LE COMPTE</a></li>
            <li><a href="/deconnexion">DECONNEXION</a></li>
            <li><a href="/events">EVENEMENTS</a></li>
        </ul>
    </nav>
    <br><br><br><br>
@yield('contenu')

<br><br>
<footer>
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</footer>