<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AhliWaris extends Model
{
    protected $table = 'ahli_waris';

    protected $fillable = ['nama', 'suami', 'nik', 'alamat', 'status', 'hp', 'bank', 'norek'];
}
