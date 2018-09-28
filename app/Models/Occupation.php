<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{	
	protected $fillable = [
        'name',
        'address',
        'jobStart',
        'jobEnd',
        'company_id',
        'alumni_id'
    ];

    public function alumni()
    {
    	return $this->belongsTo('App\Models\User','user_id');
    }

    public function company()
    {
    	return $this->belongsTo('App\Models\Company','company_id');
    }
}
