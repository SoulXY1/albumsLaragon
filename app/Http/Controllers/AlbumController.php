<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        return view('albumIndex', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres =  Genre::all();
        return view('albumCreate', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|string',
            'price' => 'required|numeric',
            'genres' => 'required',
        ]);

        $album = new Album();
        $album->title = $request->title;
        $album->author = $request->author;
        $album->year = $request->year;
        $album->price = $request->price;
        $album->save();

        // Asociar las categorías seleccionadas al producto
        $album->genres()->attach($request->genres);

        Session()->flash('success', 'Se ha guardado con éxito');
        return redirect('/album');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('/albumShow', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $genres =  Genre::all();
        return view('albumEdit', compact('genres', 'album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'price' => 'required|numeric',
        ]);
    
        $album->title = $request->title;
        $album->author = $request->author;
        $album->year = $request->year;
        $album->price = $request->price;
        $album->save();
        
        if ($request->has('genres')) {
            $album->genres()->sync($request->genres);
        } else {
            $album->genre()->detach(); 
        }
        
        return redirect('/album');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();
        Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/album');
    }
}
