<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date_of_issue' => 'required|date',
            'status' => 'required|in:free,busy',
        ]);

        $book = new Books();
        $book->name = $request->name;
        $book->date_of_issue = $request->date_of_issue;
        $book->status = $request->status;
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }

    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Books $book)
    {
        $request->validate([
            'name' => 'required',
            'date_of_issue' => 'required|date',
            'status' => 'required|in:free,busy',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Books $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
