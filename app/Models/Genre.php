<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk menentukan nama tabel secara spesifik
    protected $table = 'genre';

    protected $guarded = [];

    // Relasi ke model Film (jika diperlukan)
    public function film()
    {
        return $this->hasMany(Film::class, 'genre_id');
    }
}