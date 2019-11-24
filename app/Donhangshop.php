<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donhangshop extends Model
{
    protected $table  = "donhangshop";
    public function Chitietdon()
    {
    	return $this->hasMany('App\Chitietdon','donhangshop_id','id');
    }
    public function Donhang()
    {
    	return $this->belongsTo('App\Donhang','donhang_id');
    }
    public function Shop()
    {
    	return $this->belongsTo('App\Shop','shop_id','id');
    }
}
