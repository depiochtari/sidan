<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nelayan extends Model
{
    protected $table = 'nelayan';
	
<<<<<<< HEAD
	protected $fillable = ['nama_nelayan'];

}

class Alamat extends Model
{
	protected $table = 'alamat';

	protected $fillable = ['alamat_nelayan'];
=======
>>>>>>> 8b63d6738d2149a2f9856ce3e11c417fae677d11
	protected $fillable = ['nama', 'alamat'];

}
