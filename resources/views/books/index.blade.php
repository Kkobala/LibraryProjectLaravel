<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
</head>
<body>
    <h1>Books</h1>
    <a href="{{ route('books.create') }}">Add New Book</a>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->name }} - <a href="{{ route('books.edit', $book) }}">Edit</a> | <form action="{{ route('books.destroy', $book) }}" method="POST">@csrf @method('DELETE')<button type="submit">Delete</button></form></li>
        @endforeach
    </ul>
</body>
</html>
