<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'day',
        'classStart',
        'classEnd'
    ];

    public function semester()
    {
        return $this->belongsTo('App\Semester','semester_id');
    }

    public function group_class()
    {
        return $this->hasMany('App\Group_Class','schedule_id');
    }
}
