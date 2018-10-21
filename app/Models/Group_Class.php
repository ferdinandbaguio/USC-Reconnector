<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group_Class extends Model
{
    protected $table = 'group_classes';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'status',
        'subject_id',
        'teacher_id'
    ];

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function student_class()
    {
        return $this->hasMany('App\Models\Student_Class', 'student_class_id');
    }

    public function schedules()
    {
        return $this->hasMany('App\Models\Group_Schedule', 'group_class_id');
    }
}
