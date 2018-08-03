<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carolinian extends Model
{
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'idnumber',
        'password',
        'description',
        'strength',
        'weakness',
        'usertype',
        'course_id'
    ];

    public function getFullnameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->middlename) . ' ' . ucfirst($this->lastname);
    }

    public function course()
    {
        return $this->belongsTo('App\Course','course_id');
    }

    public function job()
    {
        return $this->hasMany('App\Job','carolinian_id');
    }
}
