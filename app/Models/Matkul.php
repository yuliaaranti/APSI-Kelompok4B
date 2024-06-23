<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matkuls';
    protected $fillable = [
        'nama',
        'sks'
    ];

    public function magangs()
    {
        return $this->belongsToMany(Magang::class, 'magang_matkul');
    }
}
