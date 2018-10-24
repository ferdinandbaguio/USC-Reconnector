<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'day',
        'class_start',
        'class_end',
        'semester_id'
    ];

    public function semester()
    {
        return $this->belongsTo('App\Models\Semester');
    }

    public function group_schedules()
    {
        return $this->hasMany('App\Models\Group_Schedule');
    }
}
