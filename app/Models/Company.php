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

    public function company()
    {
    	return $this->belongsTo('App\Models\Company','company_id');
    }

    public function area()
    {
    	return $this->belongsTo('App\Models\Area','area_id');
    }

    public function industry()
    {
    	return $this->belongsToMany('App\Models\Industry','industry_id');
    }
}
