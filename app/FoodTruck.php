<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodTruck extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'slug';
}