<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Author</title>
</head>
<body>
    <h1>Add New Author</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <label for="name">Author Name:</label>
        <input type="text" name="name" id="name" required>
        
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('authors.index') }}">Back to List</a>
</body>
</html>
