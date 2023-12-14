<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Moviecontroller extends Controller
{
    public function movie_list(){
        return view('movie.movie_list');
    }
    public function movie_detail(){
        return view('movie.movie_detail');
    }
}
