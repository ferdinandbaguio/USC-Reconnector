<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Class extends Model
{

    public function student()
    {
        return $this->belongsTo('App\student','carolinian_id');
    }

    public function group_class()
    {
        return $this->belongsTo('App\Group_Class','class_group_id');
    }
}
