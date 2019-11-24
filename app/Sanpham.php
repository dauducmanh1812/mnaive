<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
  	protected $table = "sanpham";
  	public function Sanphamshop()
  	{
  		return $this->hasOne('App\Sanphamshop');
  	}
  	public function Loaisanpham()
  	{
  		return $this->belongsTo('App\Loaisanpham','loaisanpham_id','id');
  	}
  	public function Shop()
  	{
  		return $this->belongsTo('App\Shop','shop_id','id');
  	}
    public function Chitietdon()
    {
      return $this->hasMany('App\Chitietdon','sanpham_id','id');
    }
    public function Binhluan(){
      return $this->hasMany('App\Binhluan','sanpham_id','id');
    }
}
