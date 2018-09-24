<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_Category extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Models\Post','post_id');
    }

    public function filter()
    {
        return $this->belongsTo('App\Models\Filter','filter_id');
    }
}
