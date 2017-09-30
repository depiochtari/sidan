<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nelayan extends Model
{
    protected $table = 'nelayan';
	
	protected $fillable = ['nama_nelayan'];

	protected $table ='alamat';

	protected $fillable = ['alamat_nelayan'];

}
