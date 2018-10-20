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
    public function messages()
    {
        return $this->hasMany('App\Models\Message','sender_id');
    }

    public function user_skills()
    {
        return $this->hasMany('App\Models\User_Skill','user_id');
    }

    public function student_class()
    {
        return $this->hasMany('App\Models\Student_Class','student_id');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'poster_id');
    }

    public function occupations()
    {
        return $this->hasMany('App\Models\Occupation', 'alumni_id');
    }

    public function graduates()
    {
        return $this->hasMany('App\Models\Graduate', 'alumni_id');
    }

    public function courses()
    {
        return $this->belongsTo('App\Models\Course','course_id');
    }

    public function departments()
    {
        return $this->belongsTo('App\Models\Department','department_id');
    }

    public function jobPosts()
    {
        return $this->hasMany('App\Models\JobPost', 'user_id');
    }

    public function announcements()
    {
        return $this->hasMany('App\Models\Announcement', 'user_id');
    }

    
    //GTS
    public function graduateTracer()
    {
    	return $this->hasMany('App\GraduateTracerStudy','user_id');
    }

}
