<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $fillable = [
        'title', 'slug', 'list_new_id', 'description', 'content', 'image'
    ];
    public function listNew()
    {
        return $this->belongsTo('App\ListNew');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
