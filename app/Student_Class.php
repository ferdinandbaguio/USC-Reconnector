<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Class extends Model
{
    protected $fillable = [
        'premidterm',
        'midterm',
        'prefinal',
        'final'
    ];

    public function student()
    {
        return $this->belongsTo('App\Carolinian','carolinian_id');
    }

    public function class_group()
    {
        return $this->belongsTo('App\Class_Group','class_group_id');
    }
}
