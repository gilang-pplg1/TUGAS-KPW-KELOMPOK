<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'film';
    protected $fillable = ['judul', 'ringkasan', 'tahun', 'poster', 'genre_id'];

    // Relasi Inverse ke Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    // Relasi One to Many ke Peran
    public function peran()
    {
        return $this->hasMany(Peran::class, 'film_id');
    }

    // Relasi One to Many ke Kritik
    public function kritik()
    {
        return $this->hasMany(Kritik::class, 'film_id');
    }
}