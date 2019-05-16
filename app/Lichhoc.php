<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lichhoc extends Model
{
    protected $table = 'lichhocs';

    protected $fillable = ['idMonhoc','idGiohoc','idPhonghoc'];

    public function giohoc(){
        return $this->belongsTo('Giohoc');
    }

    public function monhoc() {
        return $this->belongsTo('Monhoc');
    }

    public function phonghoc() {
        return $this->belongsTo('Phonghoc');
    }

    public function users(){
        return $this->belongsToMany('App\User','user_lichhoc','idUser','idLichhoc')->withPivot('state')->withTimestamps();
    }
}
