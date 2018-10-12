<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name',
        'longitude',
        'latitude'
    ];

    public function area()
    {
    	return $this->hasMany('App\Models\Company','area_id');
    }

}
