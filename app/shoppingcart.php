<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingcart extends Model
{
    protected $table = "laptop";

    public function cart(){
    	return $this->hasMany('App\table','id');
    }
}
