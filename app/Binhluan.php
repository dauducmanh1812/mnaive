<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    protected $table = "binhluan";

    public function Sanpham()
    {
    	return $this->belongsTo('App\Sanpham','sanpham_id','id');
    }
    public function Users()
    {
    	return $this->belongsTo('App\Users','user_id','id');
    }
}
