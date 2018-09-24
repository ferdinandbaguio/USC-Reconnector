<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'code',
        'title',
        'description'
    ];

    public function group_class()
    {
        return $this->hasMany('App\Models\Group_Class','subject_id');
    }
}
