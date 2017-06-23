<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class BackCamera extends Model
{
    protected $table = 'back_cameras';
    protected $fillable = ['resolution', 'film', 'flash', 'advanced_photography'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
