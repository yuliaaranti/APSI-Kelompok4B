<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;

    protected $table = 'magangs';
    protected $fillable = [
        'status',
        'lokasi',
        'bidang',
        'kontak',
        'laporan',
        'mahasiswa_id',
        'dosbing_id',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function dosbing()
    {
        return $this->belongsTo(Dosbing::class);
    }

    public function matkuls()
    {
        return $this->belongsToMany(Matkul::class, 'magang_matkul');
    }
}
