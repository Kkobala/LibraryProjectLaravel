<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Author</title>
</head>
<body>
    <h1>Edit Author</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Author Name:</label>
        <input type="text" name="name" id="name" value="{{ $author->name }}" required>
        
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('authors.index') }}">Back to List</a>
</body>
</html>
