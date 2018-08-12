<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function class_group()
    {
        return $this->hasMany('App\Class_Group','subject_id');
    }
}
