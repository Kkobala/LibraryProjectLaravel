<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Details</title>
</head>
<body>
    <h1>Book Details</h1>
    <p><strong>Name:</strong> {{ $book->name }}</p>
    <p><strong>Date of Issue:</strong> {{ $book->date_of_issue }}</p>
    <p><strong>Status:</strong> {{ $book->status }}</p>
    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>
