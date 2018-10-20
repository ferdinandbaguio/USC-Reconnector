<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    public $primaryKey = 'id';
    public $timestamps = true;

	protected $fillable = [
        'name',
        'code',
        'description',
        'department_id'
    ];

    public function students()
    {
        return $this->hasMany('App\Models\User');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id');
    }

    
}
