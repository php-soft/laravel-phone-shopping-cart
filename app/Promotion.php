<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Promotion extends Model
{
    protected $table = 'promotion';
    protected $fillable = ['percent', 'max_price', 'start_date', 'end_date'];
}
