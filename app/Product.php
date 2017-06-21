<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Front_Camera;
use App\Back_Camera;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'slug', 'price', 'description', 'image', 'category_id', 'factory_id', 'tophot', 'warranty_moth', 'status', 'back_camera_id', 'front_camera_id', 'battery_id', 'connect_id', 'design_id', 'opera_system_id', 'screen_id',  'utility_id'];

    public function front_cameras(){
    	return $this->hasOne('App\Front_Camera');
    }

    public function front_camera(){
    	return $this->belongsTo('App\Front_Camera');
    }

    public function back_cameras(){
    	return $this->hasOne('App\Back_Camera');
    }

    public function back_camera(){
    	return $this->belongsTo('App\Back_Camera');
    }
}
