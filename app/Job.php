<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{	
	protected $fillable = [
        'name',
        'address',
        'jobStart',
        'jobEnd',
        'company_id',
        'carolinian_id'
    ];

    public function carolinian()
    {
    	return $this->belongsTo('App\Carolinian','carolinian_id');
    }

    public function company()
    {
    	return $this->belongsTo('App\Company','company_id');
    }
}
