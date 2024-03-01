<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Book Name:</label>
        <input type="text" name="name" id="name" value="{{ $book->name }}" required>
        
        <label for="date_of_issue">Date of Issue:</label>
        <input type="date" name="date_of_issue" id="date_of_issue" value="{{ $book->date_of_issue }}" required>
        
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="free" {{ $book->status == 'free' ? 'selected' : '' }}>Free</option>
            <option value="busy" {{ $book->status == 'busy' ? 'selected' : '' }}>Busy</option>
        </select>
        
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>
