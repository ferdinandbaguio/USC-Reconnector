<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carolinian extends Model
{
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'password',
        'description',
        'strength',
        'weakness',
        'course_id'
    ];
}
