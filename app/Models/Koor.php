<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Koor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'koors';
    protected $fillable = [
        'email',
        'password',
        'nama'
    ];
}
