<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Manufactory extends Model
{
    protected $table = 'manufactories';
    protected $fillable = ['name', 'slug', 'phonenumber', 'address', 'email', 'image', 'description', 'location', 'status'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
