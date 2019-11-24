<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{
    protected $table = "loaisanpham" ;
    public function Sanpham (){
    	return $this->hasMany('App\Sanpham','loaisanpham_id','id');
    }
}
