<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'anak';

    protected $fillable = ['nama', 'umur', 'alamat', 'saudara', 'ayah', 'ibu', 'pendidikan'];
}
