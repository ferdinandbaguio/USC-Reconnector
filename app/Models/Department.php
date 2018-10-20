<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'code',
        'description',
        'school_id'
    ];

    public function school()
    {
        return $this->belongsTo('App\Models\School');
    }
    public function courses()
    {
        return $this->hasMany('App\Models\Course','course_id');
    }
    public function users()
    {
        return $this->hasMany('App\Models\User','department_id');
    }
    public function linkages()
    {
        return $this->hasMany('App\Models\Course', 'linkage_id');
    }
}
