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
        'usertype',
        'jobstatus',
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

    public function carolinian_skill()
    {
        return $this->hasMany('App\Carolinian_Skill','carolinian_id');
    }

    public function post()
    {
        return $this->hasMany('App\Post', 'carolinian_id');
    }

    public function message()
    {
        return $this->hasMany('App\Message','sender_id');
    }
}
