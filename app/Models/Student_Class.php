<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_Class extends Model
{
    protected $table = 'student_classes';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'student_id',
        'group_class_id'
    ];

    public function student()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function group_class()
    {
        return $this->belongsTo('App\Models\Group_Class', 'group_class_id');
    }
}
