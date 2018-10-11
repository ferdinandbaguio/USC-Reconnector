<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'name',
        'address',
        'description',
        'service',
        'industry_id'
    ];

    public function job()
    {
    	return $this->hasOne('App\Models\Job','company_id');
    }

    public function country()
    {
    	return $this->belongsTo('App\Models\Country','country_id');
    }

    public function industry()
    {
    	return $this->belongsToMany('App\Models\Industry','industry_id');
    }
}
