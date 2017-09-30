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
	protected $fillable = ['nama', 'alamat'];
>>>>>>> 6a1e6d097f45b9252ffc64db45396c35cef66340
}
