<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];


    public function department()
    {
        return $this->hasMany('App\Department','school_id');
    }
}
