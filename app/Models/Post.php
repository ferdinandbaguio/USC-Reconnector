<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'announcement',
        'picture',
        'poster_id'
    ];
       
    public function poster()
    {
        return $this->belongsTo('App\Models\User','poster_id');
    }

    public function filter()
    {
        return $this->hasOne('App\Models\Filter');
    }
}
