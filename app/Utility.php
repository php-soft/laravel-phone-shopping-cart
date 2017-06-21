<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Utility extends Model
{
    protected $table = 'utilities';
    protected $fillable = ['advanced_security', 'special_function', 'recording', 'radio', 'movie', 'music'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}

