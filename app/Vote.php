<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Vote extends Model
{
    protected $table = 'votes';
    protected $fillable = ['product_id', 'star', 'comment'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
