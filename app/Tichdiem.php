<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tichdiem extends Model
{
    protected $table = "tichdiem";
    public function Users()
    {
    	return $this->belongsTo('App\Users');
    }
}
