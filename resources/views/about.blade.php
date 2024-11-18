<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">O mnie</a>
            <a href="{{ route('gallery') }}">Galeria</a>
            <a href="{{ route('contact') }}">Kontakt</a>
            <a href="{{ route('formresult') }}">Wynik Formularza</a>
        </nav>
    </header>
    <main>
        <h1>About Me</h1>
        <p>Hej! Jestem Amelia Górska, studentka Akademii Nauk Stosowanych w Elblągu.</p>
        <p>Tutaj ja hihih:</p>
        <img src="{{ asset('images/ja.jpeg') }}" alt="Example Image" style="width: 300px; height: auto;">
        <p>Obecnie studiuję na specjalizacji Programowanie i interesuję się technologiami webowymi.</p>
        <p>A tutaj nasza piekna uczelnia:</p>
        <img src="{{ asset('images/ans.png') }}" alt="Example Image" style="width: 300px; height: auto;">
    
    </main>

</body>
</html>
