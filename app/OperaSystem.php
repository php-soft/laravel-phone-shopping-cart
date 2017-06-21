<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class OperaSystem extends Model
{
    protected $table = 'opera_systems';
    protected $fillable = ['opera_system', 'chipset', 'gpu_speed', 'gpu'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
