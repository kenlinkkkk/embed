<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    protected $table = 'monhocs';

    protected $fillable = ['tenMonhoc'];

    public function lichhocs(){
        return $this->hasMany('Lichhoc');
    }
}
