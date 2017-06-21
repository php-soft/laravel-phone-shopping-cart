<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'status'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}
