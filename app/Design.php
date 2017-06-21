<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Design extends Model
{
    protected $table = 'designs';
    protected $fillable = ['design', 'material', 'size', 'weight'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}
