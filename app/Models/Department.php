<?php

namespace App\Models;

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
        return $this->belongsTo('App\Models\School','school_id');
    }

    public function course()
    {
        return $this->hasMany('App\Models\Course','department_id');
    }
}
