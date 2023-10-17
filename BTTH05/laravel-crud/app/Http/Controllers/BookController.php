<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::paginate(5);

        return view('books.index',compact('books'))
                ->with('i', (request()->input('page', 1) - 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $authors = Author::all();

        return view('books.create',compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $books = Book::all();
        $i=1;

        foreach ($books as $book){
            if ($book->id == $i) {
                $i++;
            } else {
                break;
            }
        }

        Book::create([
            'id' => $i,
            'author_id' => $request->author_id,
            'title' => $request->title,
        ]);

        return redirect()->route('books.index')
                ->with('success','Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        $authors = Author::all();

        return view('books.edit', compact('book','authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
        $book->update([
            'author_id' => $request->author_id,
            'title' => $request->title,
        ]);

        return redirect()->route('books.index')
                ->with('success','Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();

        return redirect()->route('books.index')
                ->with('success','Author destroied successfully.');
    }
}
