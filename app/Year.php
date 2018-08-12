<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = [
        'name'
    ];

    public function semester()
    {
        return $this->hasMany('App\Semester','year_id');
    }
}
