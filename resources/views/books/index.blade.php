<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books List</title>
</head>
<body>
    <h1>Books List</h1>
    <a href="{{ route('books.create') }}">Add New Book</a>
    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->name }}
                - <a href="{{ route('books.show', $book->id) }}">View</a>
                - <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                - <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
