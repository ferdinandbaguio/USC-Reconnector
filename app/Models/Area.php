<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'country_id',
        'code',
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
