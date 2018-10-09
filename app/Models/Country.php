<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'code',
        'name'
    ];

    public function country()
    {
    	return $this->hasMany('App\Models\Company','country_id');
    }

}
