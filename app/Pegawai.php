<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegewai';

    protected $fillable = ['jabatan_id', 'nama', 'alamat', 'hp'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }

    public function struktur()
    {
        return $this->hasOne(Struktur::class);
    }
}
