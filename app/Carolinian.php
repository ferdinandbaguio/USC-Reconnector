<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Carolinian extends Model
{


    protected $fillable = [
        'idNumber',
        'password',
        'gender',
        'firstName',
        'middleName',
        'lastName',
        'description',
        'picture',
        'yearLevel',
        'userType',
        'employmentStatus',
        'updateStatus',
        'position',
    ];

    public function getFullnameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->middlename) . ' ' . ucfirst($this->lastname);
    }
    public function role()
    {
        return $this->belongsTo('App\Role','role_id');
    }
    public function message()
    {
        return $this->hasMany('App\Message','sender_id');
    }

    public function carolinian_skill()
    {
        return $this->hasMany('App\Carolinian_Skill','carolinian_id');
    }

    public function student_class()
    {
        return $this->hasMany('App\Student_Class','carolinian_id');
    }
    
    public function post()
    {
        return $this->hasMany('App\Post', 'poster_id');
    }

    public function occupation()
    {
        return $this->hasMany('App\Occupation', 'carolinian_id');
    }

    public function graduate()
    {
        return $this->hasMany('App\Graduate', 'carolinian_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course','course_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department','department_id');
    }

    public function is_admin(){
        if($this->Admin){
            return true;
        }
        return false;
    }


}
