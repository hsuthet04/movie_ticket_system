<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function home()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog');
    }
}
