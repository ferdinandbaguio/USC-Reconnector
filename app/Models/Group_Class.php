<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group_Class extends Model
{
    public function subject()
    {
        return $this->belongsTo('App\Models\Subjects', 'subject_id');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule', 'schedule_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Carolinian', 'carolinian_id');
    }

    public function group_class()
    {
        return $this->hasMany('App\Models\Student_Class', 'group_class_id');
    }
}
