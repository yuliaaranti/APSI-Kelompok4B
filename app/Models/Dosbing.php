<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosbing extends Model
{
    use HasFactory;

    protected $table = 'dosbings';
    protected $fillable = [
        'nama'
    ];

    public function magangs()
    {
        return $this->hasMany(Magang::class);
    }
}
