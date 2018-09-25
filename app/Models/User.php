<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    protected $fillable = [
        'userStatus',
        'userType',
        'idnumber',
        'password',
        'sex',
        'firstName',
        'middleName',
        'lastName',
        'email',
        'description',
        'picture',
        'yearLevel',
        'employmentStatus',
        'updateStatus',
        'position',
    ];

    public function getFullnameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->middlename) . ' ' . ucfirst($this->lastname);
    }
    public function message()
    {
        return $this->hasMany('App\Models\Message','sender_id');
    }

    public function user_skill()
    {
        return $this->hasMany('App\Models\User_Skill','user_id');
    }

    public function student_class()
    {
        return $this->hasMany('App\Models\Student_Class','student_id');
    }
    
    public function post()
    {
        return $this->hasMany('App\Models\Post', 'poster_id');
    }

    public function occupation()
    {
        return $this->hasMany('App\Models\Occupation', 'alumni_id');
    }

    public function graduate()
    {
        return $this->hasMany('App\Models\Graduate', 'alumni_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course','course_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id');
    }

    public function is_admin(){
        if($this->Admin){
            return true;
        }
        return false;
    }


}
