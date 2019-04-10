<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    protected $table = 'lop';

    public function khoahoc(){
    	return $this->belongsTo('App\khoahoc','id_khoahoc','id');
    }
}
