<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Language;
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
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'trailer_image' => 'required',
            'language' => 'required',
            'genre' => 'required',
            'rating' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
            'release_date' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
        }
        if ($request->hasFile('trailer_image')) {
            $trailer_imageName = time() . '_img.' . $request->trailer_image->extension();
            $request->trailer_image->move(public_path('uploads'), $trailer_imageName);
        }
        Movie::create([
            'name' => $request->input('name'),
            'image' => $imageName,
            'description' => $request->input('description'),
            'trailer_image' => $trailer_imageName,
            'language' => $request->input('language'),
            'genre' => $request->input('genre'),
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
        // $data = $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'language' => 'required',
        //     'genre' => 'required',
        //     'rating' => ['required', 'numeric'],
        //     'duration' => ['required', 'numeric'],
        //     'release_date' => 'required'
        // ]);

        $movie = Movie::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $originalName = $image->getClientOriginalName();
            $parts = explode('.', $originalName);
            $extension = end($parts);
            $imageName = time() . '.' . $extension;
            $request->image->move(public_path('uploads'), $imageName);
            $movie->image = $imageName;
        }
        if ($request->hasFile('trailer_image')) {
            $trailer_image = $request->file('trailer_image');
            $originalName = $trailer_image->getClientOriginalName();
            $parts = explode('.', $originalName);
            $extension = end($parts);
            $trailer_imageName = time() . '_img.' . $extension;
            $request->trailer_image->move(public_path('uploads'), $trailer_imageName);
            $movie->trailer_image = $trailer_imageName;
        }
        $movie->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'language' => $request->input('language'),
            'genre' => $request->input('genre'),
            'rating' => $request->input('rating'),
            'duration' => $request->input('duration'),
            'release_date' => $request->input('release_date')
        ]);
        return redirect('/admin/movie/showMovie');
        // return dd($movie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/admin/movie/showMovie');
    }

    public function trash()
    {
        $records = Movie::onlyTrashed()->get();
        //Movie::withTrashed()->find($id)->restore(); 

        return view('/admin/movie/trashmovie', compact('records'));
    }

    public function restore(string $id)
    {
        Movie::withTrashed()->findOrFail($id)->restore();
        return redirect('admin/movie/showMovie');
    }

    public function delete(string $id)
    {
        Movie::withTrashed()->findOrFail($id)->forceDelete();
        return redirect('admin/movie/showMovie');
    }
    public function detail(string $id)
    {
        $movies = Movie::findOrFail($id);
        return view('movie.movie_detail', compact('movies'));
    }
    public function list()
    {
        $movies = Movie::all();
        $languages = Language::all();
        $genres = Genre::all();
        return view('movie.movie_list', compact('movies', 'languages', 'genres'));
    }


    public function filter(Request $request)
    {
        $query = Movie::query();

        if ($request->has('language')) {
            $query->whereIn('language', $request->input('language'));
        }
        if ($request->has('genre')) {
            $query->whereIn('genre', $request->input('genre'));
        }
        $movies = $query->get();
        $languages = Language::all();
        $genres = Genre::all();
        //return $movies;

        return view('movie.movie_list', compact('movies', 'languages', 'genres'));
    }
}
