<!DOCTYPE html>
<html>
<head>
    <title>Kategorie Produktów</title>
</head>
<body>
    <h1>Wybierz Kategorię</h1>
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
