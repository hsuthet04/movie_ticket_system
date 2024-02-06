<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\User;
use App\Models\Movie;
use App\Models\Theatre;
use App\Models\Booking;
use App\Models\Showtime;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $users = User::all();
        $movies = Movie::all();
        $theatres = Theatre::all();
        $bookings = Booking::all();
        return view('admin.home', compact('users', 'movies', 'theatres', 'bookings'));
    }

    public function theatre_list()
    {
        return view('admin.scheduling.theatre_list');
    }

    public function user_list()
    {
        $users = User::select('id', 'name', 'email', 'phone')->get();
        return view('admin.user.user_list', compact('users'));
    }

    public function booking()
    {
        $bookings = Booking::with('user', 'movie', 'theatre', 'showtime')->get();
        return view('admin.booking.booking_list', compact('bookings'));
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
