<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['id','brand','model','color', 'year', 'price', 'description', 'type', 'created_at', 'update_at'];
}
