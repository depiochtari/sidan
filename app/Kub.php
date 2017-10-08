<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kub extends Model
{
     protected $table = 'kub';
	
	protected $fillable = ['nama','nelayan'];
}
