<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Category extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post','post_id');
    }

    public function filter()
    {
        return $this->belongsTo('App\Filter','filter_id');
    }
}
