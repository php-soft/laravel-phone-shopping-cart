<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Connect extends Model
{
    protected $table = 'connects';
    protected $fillable = ['network_mobile', 'sim', 'wifi', 'gps', 'bluetooth',
    'connect_fort', 'jack_phone', 'other_connect'];

    public function products()
    {
        return $this->hasOne('App\Product');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
