<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'full_name'
    ];

    public function getFullNameAttribute()
    {
        return ucfirst($this->firstName) . ' ' . ucfirst($this->middleName) . ' ' . 
        ucfirst($this->lastName);
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

    


}
