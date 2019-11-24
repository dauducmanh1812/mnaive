<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taoshop extends Model
{
    protected $table = "taoshop";
    public function users(){
    	return $this->belongsTo('App\Users','user_id','id');
    }
}
