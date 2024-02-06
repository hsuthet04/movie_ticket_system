<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Movie;
use App\Models\Booking;
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
        //dd($showtime);
        $seats = Seat::select('id')->where('theatre_id', $theatre_id)
            ->where('showtime_id', $showtime_id)
            ->where('movie_id', $id)
            ->get();
        //dd($seats);
        $bookings = Booking::select('seat_id', 'movie_id', 'theatre_id', 'showtime_id')->get();
        //dd($bookings);
        return view('booking.seat_plan', compact('movie', 'theatre', 'showtime', 'seats', 'bookings'));
    }

    public function checkout(Request $request, string $id, string $theatre_id, string $showtime_id)
    {
        $selectedSeats = $request->input('seat_id', []);
        $amount = count($selectedSeats) * 10000;
        $movie = Movie::findOrFail($id);
        $theatre = Theatre::findOrFail($theatre_id);
        $showtime = Showtime::findOrFail($showtime_id);
        return view('booking.movie_checkout', compact('movie', 'theatre', 'showtime', 'selectedSeats', 'amount'));
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
    public function store(string $movie_id, string $theatre_id, string $showtime_id, Request $request)
    {
        $seats = $request->input('seats', []);

        foreach ($seats as $seat) {
            Booking::create([
                'user_id' => auth()->user()->id,
                'movie_id' => $movie_id,
                'theatre_id' => $theatre_id,
                'showtime_id' => $showtime_id,
                'seat_id' => $seat
            ]);
        }

        return redirect()->route('payment', [
            $movie_id, $theatre_id, $showtime_id
        ]);
    }

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
