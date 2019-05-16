<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phonghoc extends Model
{
    protected $table = 'phonghocs';

    protected $fillable = ['toa', 'phong'];

    public function lichhoc(){
        return $this->hasOne(Lichhoc);
    }
}
