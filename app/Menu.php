<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function truck()
    {
    	return $this->belongsTo('App\FoodTruck');
    }

    public function items()
    {
    	return $this->hasMany('App\MenuItem');
    }
}
