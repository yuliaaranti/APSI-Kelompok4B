<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagangMatkul extends Model
{
    use HasFactory;

    protected $table = 'magang_matkul';
    protected $fillable = [
        'magang_id',
        'matkul_id'
    ];
}
