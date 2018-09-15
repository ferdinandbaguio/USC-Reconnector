<?php

namespace App;

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
        return $this->hasMany('App\Group_Class','subject_id');
    }
}
