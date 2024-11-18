<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
        <h1>Galeria</h1>
        <p>Tutaj mozesz zobaczyc zdjecie slodkiego kotka:</p>
        <img src="{{ asset('images/kotek.jpg') }}" alt="Example Image" style="width: 300px; height: auto;">
    </main>
    <footer>
        <p>kotek</p>
    </footer>
</body>
</html>
