<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class FrontCamera extends Model
{
    protected $table = 'front_cameras';
    protected $fillable = ['resolution', 'videocall', 'other_info'];

    public function products()
    {
    	return $this->hasOne('App\Product');
    }

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
