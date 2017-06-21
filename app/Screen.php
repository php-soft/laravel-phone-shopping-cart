<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Screen extends Model
{
    protected $table = 'screens';
    protected $fillable = ['tech_screen', 'resolution', 'width_screen', 'touch_screen'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
