<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = [
        'name',
        'description',
    ];

    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id');
    }

    public function carolinian()
    {
        return $this->hasMany('App\Models\Carolinian','course_id');
    }
}
