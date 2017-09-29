<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nelayan extends Model
{
    protected $table = 'nelayan';
	
	protected $fillable = ['nama_nelayan'];
}
