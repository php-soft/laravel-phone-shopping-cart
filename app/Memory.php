<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Memory extends Model
{
    protected $table = 'memories';
    protected $fillable = ['ram', 'rom', 'available_memory', 'external_memory_card'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
