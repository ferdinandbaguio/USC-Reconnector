<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $table = 'filters';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'announcement_id',
        'school_id',
        'department_id',
        'course_id',
        'group_class_id'
    ];

    public function announcement()
    {
    	return $this->belongsTo('App\Models\Announcement');
    }

    public function school()
    {
    	return $this->belongsTo('App\Models\School');
    }

    public function department()
    {
    	return $this->belongsTo('App\Models\Department');
    }

    public function course()
    {
    	return $this->belongsTo('App\Models\Course');
    }

    public function group_class()
    {
    	return $this->belongsTo('App\Models\Group_Class');
    }
}
