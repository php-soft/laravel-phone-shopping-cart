<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Battery extends Model
{
    protected $table = 'batteries';
    protected $fillable = ['battery_capacity', 'battery_type', 'battery_tech'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
