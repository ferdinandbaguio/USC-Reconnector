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

    public function country()
    {
    	return $this->hasMany('App\Models\Company','country_id');
    }
}
