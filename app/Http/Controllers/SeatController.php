<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Theatre;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
        $theatres = Theatre::all();
        $showTimes = Showtime::all();
        return view('admin.seat.seat_create', compact('theatres', 'showTimes', 'movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie_id = $request->input('movie_id');
        $theatre_id = $request->input('theatre_id');
        $showTime_id = $request->input('showtime_id');

        $rowCount = Seat::where('theatre_id', $theatre_id)
            ->where('movie_id', $movie_id)
            ->where('showtime_id', $showTime_id)
            ->count();
        if ($rowCount < 42) {
            for ($i = 1; $i < 43; $i++) {
                Seat::create([
                    'price' => 10000,
                    'movie_id' => $movie_id,
                    'theatre_id' => $theatre_id,
                    'showtime_id' => $showTime_id
                ]);
            }
            $movie = Movie::findOrFail($movie_id);
            $theatre = Theatre::findOrFail($theatre_id);
            $movie->theatres()->attach($theatre->id);

            

            $message = "Seat Created Successfully";
        } else {
            $message = "Seat Already Created";
        }
        return redirect()->route('seat.create')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
