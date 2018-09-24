<?php

namespace App\Models;

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
        return $this->belongsTo('App\Models\Semester','semester_id');
    }

    public function group_class()
    {
        return $this->hasMany('App\Models\Group_Class','schedule_id');
    }
}
