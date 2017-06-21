<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}
