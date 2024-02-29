<!DOCTYPE html>
<html>
<head>
    <title>Add/Edit Book</title>
</head>
<body>
    <h1>{{ isset($book) ? 'Edit Book' : 'Add New Book' }}</h1>
    <form action="{{ isset($book) ? route('books.update', $book) : route('books.store') }}" method="POST">
        @csrf
        @if(isset($book))
            @method('PUT')
        @endif
        <label for="name">Book Name:</label>
        <input type="text" name="name" value="{{ $book->name ?? '' }}" required>
        <label for="date_of_issue">Date of Issue:</label>
        <input type="date" name="date_of_issue" value="{{ $book->date_of_issue ?? '' }}" required>
        <label for="status">Status:</label>
        <select name="status" required>
            <option value="free" {{ (isset($book) && $book->status === 'free') ? 'selected' : '' }}>Free</option>
            <option value="busy" {{ (isset($book) && $book->status === 'busy') ? 'selected' : '' }}>Busy</option>
        </select>
        <button type="submit">{{ isset($book) ? 'Update' : 'Submit' }}</button>
    </form>
</body>
</html>
