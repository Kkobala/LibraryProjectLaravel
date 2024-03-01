<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authors List</title>
</head>
<body>
    <h1>Authors List</h1>
    <a href="{{ route('authors.create') }}">Add New Author</a>
    <ul>
        @foreach ($authors as $author)
            <li>
                {{ $author->name }}
                - <a href="{{ route('authors.show', $author->id) }}">View</a>
                - <a href="{{ route('authors.edit', $author->id) }}">Edit</a>
                - <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
