<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = "shop";

    public function users(){
    	return $this->belongsTo('App\Users','users');
    }
    public function Sanphamshop()
  	{
  		return $this->hasMany('App\Shop','shop');
  	}
  	public function Sanpham()
  	{
  		return $this->hasMany('App\Sanpham','shop_id','id');
  	}
    public function getProductIdsAttribute()
    {
      $ids = array();
      foreach ($this->Sanpham as $product) {
        array_push($ids,$product->id);
      }
      return $ids;
    }
}
