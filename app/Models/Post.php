<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'announcement',
        'picture'
    ];
       
    public function poster()
    {
        return $this->belongsTo('App\Models\Carolinian','carolinian_id');
    }

    public function post_category()
    {
        return $this->hasMany('App\Models\Post_Category','post_id');
    }
}
