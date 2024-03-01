<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="name">Book Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="date_of_issue">Date of Issue:</label>
        <input type="date" name="date_of_issue" id="date_of_issue" required>
        
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="free">Free</option>
            <option value="busy">Busy</option>
        </select>
        
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>
