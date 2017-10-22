<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AhliWaris extends Model
{
    protected $table = 'ahli_waris';

    protected $fillable = ['nama','nik', 'alamat', 'status', 'hp', 'bank', 'norek', 'nelayan_id'];

    public function nelayan()
    {
        return $this->belongsTo(Nelayan::class, 'nelayan_id');
    }
}
