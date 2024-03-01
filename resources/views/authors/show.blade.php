<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Author Details</title>
</head>
<body>
    <h1>Author Details</h1>
    <p><strong>Name:</strong> {{ $author->name }}</p>
    <p><strong>Books:</strong></p>
    <ul>
        @foreach ($author->books as $book)
            <li>{{ $book->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('authors.index') }}">Back to List</a>
</body>
</html>
