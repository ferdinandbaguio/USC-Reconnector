<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description'
    ];


    public function departments()
    {
        return $this->hasMany('App\Models\Department');
    }
}
