<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nelayan extends Model
{
    protected $table = 'nelayan';
	
	protected $fillable = ['nama','alamat', 'status', 'kn', 'nik', 'kecamatan', 'desa', 'tahun', 'kub_id'];

    public function kub()
    {
        return $this->belongsTo(Kub::class, 'kub_id');
    }

    public function ahliwaris()
    {
        return $this->hasOne(AhliWaris::class);
    }
}
