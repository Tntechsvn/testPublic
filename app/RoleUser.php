<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user';

    // public function role(){
    // 	return $this->hasOne('App\Role');
    // }
    // public function User(){
    // 	return $this->hasOne('App\Users');
    // }
}
