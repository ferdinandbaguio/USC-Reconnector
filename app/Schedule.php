<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'day',
        'time_start',
        'time_end'
    ];

    public function semester()
    {
        return $this->belongsTo('App\Semester','semester_id');
    }

    public function class_group()
    {
        return $this->hasOne('App\Class_Group','schedule_id');
    }

    public function consultation()
    {
        return $this->hasOne('App\Consultation','schedule_id');
    }
}
