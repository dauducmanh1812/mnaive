<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    protected $table = "donhang";
    public function Donhangshop()
    {
    	return $this->hasMany('App\Donhangshop','donhang_id','id');
    }
}
