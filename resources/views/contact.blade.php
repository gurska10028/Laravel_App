<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
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
    <h1>Formularz</h1>
    <form action="{{ route('handleForm') }}" method="POST">
        @csrf
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Wyślij</button>
    </form>
</main>

</body>
</html>
