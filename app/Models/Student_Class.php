<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_Class extends Model
{

    public function student()
    {
        return $this->belongsTo('App\Models\student','carolinian_id');
    }

    public function group_class()
    {
        return $this->belongsTo('App\Models\Group_Class','class_group_id');
    }
}
