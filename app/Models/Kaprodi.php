<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Kaprodi extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'kaprodis';
    protected $fillable = [
        'email',
        'password',
        'nama'
    ];
}
