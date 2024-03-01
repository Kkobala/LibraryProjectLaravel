<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Books;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{ 
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function edit(Author $author)
    {
        $books = Books::all();
        return view('authors.edit', compact('author', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'books' => 'required|array',
        ]);

        $author = Author::create($request->only(['name']));
        $author->books()->sync($request->books);

        return redirect()->route('authors.index')->with('success', 'Author added successfully.');
    }
    
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }
}
