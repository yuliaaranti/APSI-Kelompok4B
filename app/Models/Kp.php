<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kp extends Model
{
    use HasFactory;

    protected $table = 'kps';
    protected $fillable = [
        'status',
        'lokasi',
        'bidang',
        'kontak',
        'review',
        'laporan',
        'pdf',
        'mahasiswa_id',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
