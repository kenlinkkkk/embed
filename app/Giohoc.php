<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giohoc extends Model
{
    protected $table = 'giohocs';

    protected $fillable = ['day', 'time'];

    public function lichhocs(){
        return $this->hasMany('Lichhoc');
    }
}
