<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = [
        'name'
    ];

    public function semester()
    {
        return $this->hasMany('App\Models\Semester','year_id');
    }
}
