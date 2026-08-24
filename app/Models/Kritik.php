<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;

    protected $table = 'kritik';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }
}