<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $table = 'struktur';

    protected $fillable = ['pegawai_id', 'posisi', 'photo'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
