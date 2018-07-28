<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'description',
        'school_id'

    ];


    public function school()
    {
        return $this->belongsTo('App\School','school_id');
    }

    public function course()
    {
        return $this->hasMany('App\Course','department_id');
    }
}
