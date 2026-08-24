<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';
    protected $fillable = ['name', 'email', 'password'];

        // Relasi One to One ke Profile // Relasi One to One ke Profile
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    // Relasi One to Many ke Kritik  // Relasi One to Many ke Kritik
    public function kritik()
    {
        return $this->hasMany(Kritik::class, 'user_id');
    }
}