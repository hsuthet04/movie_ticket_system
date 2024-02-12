<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MovieBookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $payments;

    public function __construct($payments)
    {
        $this->payments = $payments;
    }

    public function build()
    {
        return $this->subject('Movie Booking Confirmation')
            ->view('emails.movie_booking_confirmation');
    }
}
