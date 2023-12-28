<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    public function create()
    {
        return view('admin.movie.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->file('image')->store();
        // $request->file('trailer_image')->store();
        // $request->file('photos')->store();
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'trailer_image' => 'required',
            'language' => 'required',
            'genre' => 'required',
            'photos' => 'required',
            'rating' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
            'release_date' => 'required'
        ]);


        if ($request->hasFile('image')) {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $image);
        }
        if ($request->hasFile('trailer_image')) {
            $trailer_image = time() . '.' . $request->trailer_image->extension();
            $request->trailer_image->move(public_path('uploads'), $trailer_image);
        }
        if ($request->hasFile('photos')) {
            $photos = time() . '.' . $request->photos->extension();
            $request->photos->move(public_path('photos') . $photos);
        }
        Movie::create([
            'name' => $request->input('name'),
            'image' => $image,
            'description' => $request->input('description'),
            'trailer_image' => $trailer_image,
            'language' => $request->input('language'),
            'genre' => $request->input('genre'),
            'photos' => $photos,
            'rating' => $request->input('rating'),
            'duration' => $request->input('duration'),
            'release_date' => $request->input('release_date'),
        ]);
        return redirect('/admin/movie/showMovie');
    }
    public function showMovie()
    {
        $movies = Movie::all();

        return view('admin.movie.showMovie', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);

        return view('admin.movie.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'language' => 'required',
            'genre' => 'required',
            'rating' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
            'release_date' => 'required'
        ]);
        $movie = Movie::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $image);
            $movie->image = $image;
        }
        if ($request->hasFile('trailer_image')) {
            $trailer_image = time() . '.' . $request->trailer_image->extension();
            $request->trailer_image->move(public_path('uploads'), $trailer_image);
            $movie->trailer_image = $trailer_image;
        }
        if ($request->hasFile('photos')) {
            $photos = time() . '.' . $request->photos->extension();
            $request->photos->move(public_path('uploads') . $photos);
            $movie->photos = $photos;
        }
        $movie->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'language' => $request->input('language'),
            'genre' => $request->input('genre'),
            'rating' => $request->input('rating'),
            'duration' => $request->input('duration'),
            'release_date' => $request->input('release_date'),
        ]);
        return redirect('/admin/movie/showMovie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie=Movie::findOrFail($id);
        $movie->delete();
        return redirect('/admin/movie/showMovie');
    }

    public function detail()
    {
        return view('movie_detail');
    }
    public function list()
    {
        return view('movie_list');
    }
}
