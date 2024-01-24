<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Theatre;
use App\Models\Showtime;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function seat_plan(string $id, string $theatre_id, string $showtime_id)
    {
        $movie = Movie::findOrFail($id);
        $theatre = Theatre::findOrFail($theatre_id);
        $showtime = Showtime::findOrFail($showtime_id);
        $seats = $showtime->seats;

        return view('booking.seat_plan', compact('movie', 'theatre', 'showtime', 'seats'));
    }

    public function checkout(string $id, string $theatre_id, string $showtime_id)
    {
        $movie = Movie::findOrFail($id);
        $theatre = Theatre::findOrFail($theatre_id);
        $showtime = Showtime::findOrFail($showtime_id);
        return view('booking.movie_checkout', compact('movie', 'theatre', 'showtime'));
    }

    public function ticket_plan(string $id)
    {
        $movie = Movie::findOrFail($id);
        $theatres = Theatre::select('id', 'name')->get();
        $showtimes = Showtime::select('id', 'time')->get();
        return view('booking.ticket_plan', compact('movie', 'theatres', 'showtimes'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
