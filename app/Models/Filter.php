<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $fillable = [
        'filter'
    ];

    public function post_category()
    {
    	return $this->hasMany('App\Models\Post_Category','filter_id');
    }

    public function message_category()
    {
    	return $this->hasMany('App\Models\Message_Category','filter_id');
    }
}
