<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function OrderDetail()
	{
    return $this->belongsTo('App\OrderDetail');
}
public function meal()
	{
    return $this->belongsTo('App\Meal');
}
}
