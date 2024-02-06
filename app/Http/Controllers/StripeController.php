<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Theatre;
use App\Models\Showtime;
use App\Models\Seat;
use App\Models\Booking;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function stripe(Request $request, string $movie_id, string $theatre_id, string $showtime_id)
    {
        $movie = Movie::findOrFail($movie_id);
        $theatre = Theatre::findOrFail($theatre_id);
        $showtime = Showtime::findOrFail($showtime_id);

        $stripe = new \Stripe\StripeClient('sk_test_51O9fo4GUohxRIOk7zDTFZ5vou5xxXLyrbXru0mKQ5BSunR2UER2y85RGNlDZZTNvXHsnptfwIapjNLX2s5leNzfB00CYTIht5d');

        $response = $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Pisi'
                        ],
                        'unit_amount' => 10000,
                    ],
                    'quantity' => 100,
                ],
            ],

            'mode' => 'payment',
            'success_url' => route('success', [
                'id' => $movie->id,
                'theatre_id' => $theatre->id,
                'showtime_id' => $showtime->id,
            ]) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
        ]);
        if (isset($response->id) && $response->id != '') {
            return redirect($response->url)->with(compact('movie', 'theatre', 'showtime'));
        } else {
            return redirect()->route('cancel');
        }
    }
    public function success(Request $request, string $movie_id, string $theatre_id, string $showtime_id)
    {

        if (isset($request->session_id)) {

            $movie = Movie::findOrFail($movie_id);
            $theatre = Theatre::findOrFail($theatre_id);
            $showtime = Showtime::findOrFail($showtime_id);
            $seats = Seat::select('id')->where('theatre_id', $theatre_id)
                ->where('showtime_id', $showtime_id)
                ->where('movie_id', $movie_id)
                ->get();
            $bookings = Booking::select('seat_id', 'movie_id', 'theatre_id', 'showtime_id')->get();
            //dd($theatre->id);
            $payments = Booking::where('theatre_id', $theatre_id)
                ->where('movie_id', $movie_id)
                ->where('showtime_id', $showtime_id)
                ->where('user_id', auth()->user()->id)
                ->get();
            foreach ($payments as $payment) {
                $payment->update([
                    'payment' => 1
                ]);
            }

            $stripe = new \Stripe\StripeClient('sk_test_51O9fo4GUohxRIOk7zDTFZ5vou5xxXLyrbXru0mKQ5BSunR2UER2y85RGNlDZZTNvXHsnptfwIapjNLX2s5leNzfB00CYTIht5d');
            $response = $stripe->checkout->sessions->retrieve($request->session_id);

            return view('booking.seat_plan', compact('movie', 'theatre', 'showtime', 'seats', 'bookings'));
        } else {
            return redirect()->route('cancel');
        }
    }

    public function cancel()
    {
    }

    public function payment(string $movie_id, string $theatre_id, string $showtime_id)
    {
        $movie = Movie::findOrFail($movie_id);
        $theatre = Theatre::findOrFail($theatre_id);
        $showtime = Showtime::findOrFail($showtime_id);
        return view('booking.payment', compact('movie', 'theatre', 'showtime'));
    }
    // public function update(Request $request, string $movie_id, string $theatre_id, string $showtime_id)
    // {
    //     $payments = Booking::where('theatre_id', $theatre_id)
    //         ->where('movie_id', $movie_id)
    //         ->where('showtime_id', $showtime_id)
    //         ->where('user_id', auth()->user()->id)
    //         ->get();
    //     foreach ($payments as $payment) {
    //         $payment->update([
    //             'payment' => 1
    //         ]);
    //     }
    //     return view('booking.seat_plan', compact('movie', 'theatre', 'showtime'));
    // }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
