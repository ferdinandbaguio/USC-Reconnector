<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $table = 'filters';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'message_id',
        'post_id',
        'department_id',
        'group_class_id'
    ];

    public function message()
    {
    	return $this->belongsTo('App\Models\Message');
    }

    public function post()
    {
    	return $this->belongsTo('App\Models\Post');
    }

    public function department()
    {
    	return $this->belongsTo('App\Models\Department');
    }

    public function group_class()
    {
    	return $this->belongsTo('App\Models\Group_Class');
    }
}
