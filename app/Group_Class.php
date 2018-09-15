<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_Class extends Model
{
    public function subject()
    {
        return $this->belongsTo('App\Subjects', 'subject_id');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Schedule', 'schedule_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Carolinian', 'carolinian_id');
    }

    public function group_class()
    {
        return $this->hasMany('App\Student_Class', 'group_class_id');
    }
}
