<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_Category extends Model
{
    protected $table = 'post_categories';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'filter_id',
        'post_id'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    public function filter()
    {
        return $this->belongsTo('App\Models\Filter');
    }
}
