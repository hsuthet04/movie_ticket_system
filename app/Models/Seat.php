<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'theatre_id',
        'showtime_id',
        'movie_id',
        'created_at',
        'updated_at'

    ];

    public function showtime()
    {
        return $this->belongsTo(Showtime::class);
    }
}
