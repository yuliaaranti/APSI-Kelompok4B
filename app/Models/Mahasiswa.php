<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mahasiswas';
    protected $fillable = [
        'email',
        'password',
        'nama',
        'semester'
    ];

    public function kps()
    {
        return $this->hasMany(Kp::class);
    }

    public function magangs()
    {
        return $this->hasMany(Magang::class());
    }
}
