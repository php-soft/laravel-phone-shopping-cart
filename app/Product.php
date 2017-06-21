<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Front_Camera;
use App\Back_Camera;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = 
    ['name', 'slug', 'price', 'description', 'image', 'category_id',
    'factory_id', 'tophot', 'warranty_moth', 'status', 'back_camera_id',
    'front_camera_id', 'battery_id', 'connect_id', 'design_id', 'opera_system_id',
    'screen_id',  'utility_id'];

    public function frontcameras()
    {
        return $this->hasOne('App\FrontCamera');
    }

    public function frontcamera()
    {
        return $this->belongsTo('App\FrontCamera');
    }

    public function backcameras()
    {
        return $this->hasOne('App\BackCamera');
    }

    public function backcamera()
    {
        return $this->belongsTo('App\BackCamera');
    }
}
