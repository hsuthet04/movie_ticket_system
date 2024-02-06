<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }
    public function movie()
    {
        return $this->belongsToMany(Movie::class, 'movie');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
