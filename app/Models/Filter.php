<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $table = 'filters';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'filter'
    ];

    public function post_category()
    {
    	return $this->hasMany('App\Models\Post_Category');
    }

    public function message_category()
    {
    	return $this->hasMany('App\Models\Message_Category');
    }
}
