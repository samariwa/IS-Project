<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
	public function order(){
    return $this->hasMany('App\Order');
}
public function meal()
	{
    return $this->belongsTo('App\Meal');
}
}
