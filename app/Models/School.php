<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];


    public function department()
    {
        return $this->hasMany('App\Models\Department','school_id');
    }
}
