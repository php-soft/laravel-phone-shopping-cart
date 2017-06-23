<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Front_Camera;
use App\Back_Camera;
use App\Screen;
use App\Category;
use App\Color;
use App\Connect;
use App\Design;
use App\Manufactory;
use App\Memory;


class Product extends Model
{
    protected $table = 'products';
    protected $fillable =
    ['name', 'slug', 'price', 'description', 'image', 'category_id',
    'factory_id', 'tophot', 'warranty_moth', 'status', 'back_camera_id',
    'front_camera_id', 'battery_id', 'connect_id', 'design_id', 'opera_system_id',
    'screen_id',  'utility_id'];

    public function frontCameras()
    {
        return $this->hasOne('App\FrontCamera');
    }

    public function frontCamera()
    {
        return $this->belongsTo('App\FrontCamera');
    }

    public function backCameras()
    {
        return $this->hasOne('App\BackCamera');
    }

    public function backCamera()
    {
        return $this->belongsTo('App\BackCamera');
    }

    public function operaSystems()
    {
        return $this->hasOne('App\OperaSystem');
    }

    public function operaSystem()
    {
        return $this->belongsTo('App\OperaSystem');
    }

    public function memorys()
    {
        return $this->hasOne('App\Memory');
    }

    public function memory()
    {
        return $this->belongsTo('App\Memory');
    }

    public function connects()
    {
        return $this->hasOne('App\Connect');
    }

    public function connect()
    {
        return $this->belongsTo('App\Connect');
    }

    public function batteries()
    {
        return $this->hasOne('App\Battery');
    }

    public function battery()
    {
        return $this->belongsTo('App\Battery');
    }

    public function votes()
    {
        return $this->hasOne('App\Vote');
    }

    public function vote()
    {
        return $this->belongsTo('App\Vote');
    }

    public function screens()
    {
        return $this->hasOne('App\Screen');
    }

    public function screen()
    {
        return $this->belongsTo('App\Screen');
    }

    public function color()
    {
        return $this->belongsTo('App\Color');
    }
}
