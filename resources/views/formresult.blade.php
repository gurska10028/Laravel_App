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
    <h1>Wynik formularza</h1>
    @if(session('formData'))
        <p>Imię: {{ session('formData.name') }}</p>
        <p>Email: {{ session('formData.email') }}</p>
    @else
        <p>Nie przesłano jeszcze żadnych danych.</p>
    @endif
    <form action="{{ route('clearFormData') }}" method="POST">
    @csrf
    <button type="submit">Wyczyść dane</button>
    </form>

</main>


</body>
</html>
