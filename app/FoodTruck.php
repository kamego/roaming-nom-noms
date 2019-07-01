<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodTruck extends Model
{
    protected $guarded = [];
    // protected $primaryKey = 'slug';

    public function menus()
    {
    	return $this->hasMany('App\Menu');
    }

    public function defaultMenu()
    {
    	return $this->menus()->with(['items'])->first();
    }
}