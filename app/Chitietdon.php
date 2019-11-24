<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietdon extends Model
{
    protected $table = "chitietdon";
    public function Donhangshop()
    {
    	return $this->belongsTo('App\Donhangshop');
    }
    public function Sanpham()
    {
    	return $this->belongsTo('App\Sanpham','sanpham_id');
    }
}
