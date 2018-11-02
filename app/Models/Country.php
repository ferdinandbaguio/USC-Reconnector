<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'code',
        'flag',
        'name',
        'value'
    ];

    public function companies()
    {
    	return $this->hasMany('App\Models\Company');
    }
    public function jobs()
    {
    	return $this->hasMany('App\Models\Job');
    }
}
