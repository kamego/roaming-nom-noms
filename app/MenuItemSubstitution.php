<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItemSubstitution extends Model
{
    protected $guarded = [];

    public function item()
    {
    	return $this->belongsTo('App\MenuItem');
    }
}
