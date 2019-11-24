<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanphamshop extends Model
{
    protected $table = "sanphamshop";
  	public function Users()
  	{
  		return $this->belongsToMany('App\Users');
  	}
  	public function Sanpham()
  	{
  		return $this->belongsTo('App\Sanpham','sanpham_id','id');
  	}
    public function Shop()
    {
      return $this->belongsTo('App\Sanphamshop','sanpham_id','id');
    }

     public $timestamps = false;
}
