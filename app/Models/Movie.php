<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'image',
        'description',
        'trailer_image',
        'language',
        'genre',
        'rating',
        'duration',
        'release_date',
        'created_at',
        'updated_at'
    ];

    public function theatres()
    {
        return $this->belongsToMany(Theatre::class, 'movie_theatre');
    }
    public function showTimes()
    {
        return $this->hasMany(Showtime::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
