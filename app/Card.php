<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Card extends Model
{
	protected $table = 'chitietdon';
    protected $primaryKey="id";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}