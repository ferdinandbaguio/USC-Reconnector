<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = [
        'name',
        'description',
        'department_id'
    
    ];

    public function department()
    {
        return $this->belongsTo('App\Department','department_id');
    }

    public function carolinian()
    {
        return $this->hasMany('App\Carolinian','course_id');
    }
}
