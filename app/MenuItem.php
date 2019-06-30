<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $guarded = [];

    public function menu()
    {
    	return $this->belongsTo('App\Menu');
    }
    
    public function substituations()
    {
    	return $this->hasMany('App\MenuItemSubstitution');
    }
}
