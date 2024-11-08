<!DOCTYPE html>
<html>
<head>
    <title>Produkty w Kategorii: {{ $category->name }}</title>
</head>
<body>
    <h1>Produkty w kategorii: {{ $category->name }}</h1>

    <ul>
        @forelse($category->products as $product)
            <li>
                <h3>{{ $product->name }}</h3>
                <p>Cena: {{ $product->price }} PLN</p>
                <p>{{ $product->description }}</p>
            </li>
        @empty
            <p>Brak produktów w tej kategorii.</p>
        @endforelse
    </ul>

    <a href="{{ route('categories.index') }}">Powrót do kategorii</a>
</body>
</html>
