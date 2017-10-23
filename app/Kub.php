<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kub extends Model
{
    protected $table = 'kub';
	
	protected $fillable = ['nama','alamat', 'nelayan_id'];

    public function nelayan()
    {
        return $this->hasMany(Nelayan::class, 'kub_id');
    }
}
