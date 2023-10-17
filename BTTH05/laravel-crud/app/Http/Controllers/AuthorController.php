<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $authors = Author::paginate(5);

        return view('authors.index',compact('authors'))->with('i', (request()->input('page', 1) - 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $authors = Author::all();
        $i=1;
        foreach ($authors as $author){
            if ($author->id == $i) {
                $i++;
            } else {
                break;
            }
        }

        Author::create([
            'id' => $i,
            'name' => $request->name,
            'bio' => $request->bio,
        ]);

        return redirect()->route('authors.index')
                ->with('success','Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
        $author->update([
            'name' => $request->name,
            'bio' => $request->bio,
        ]);

        return redirect()->route('authors.index')
                ->with('success','Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();

        return redirect()->route('authors.index')
                ->with('success','Author destroied successfully.');
    }
}
