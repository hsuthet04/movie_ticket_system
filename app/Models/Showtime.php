<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    protected $fillable = ['time'];

    public function theatre()
    {
        return $this->belongsTo(Theatre::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
