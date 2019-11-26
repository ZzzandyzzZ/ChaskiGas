<?php

namespace ChaskiGas;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    


    public function users(){
    	return $this->hasMany('ChaskiGas\User');
    }
}
