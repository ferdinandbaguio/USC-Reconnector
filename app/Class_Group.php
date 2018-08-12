<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_Group extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\Teacher','teacher_id');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject','subject_id');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Schedule','schedule_id');
    }

    public function student_class()
    {
        return $this->hasMany('App\Student_Class','class_group_id');
    }
}
