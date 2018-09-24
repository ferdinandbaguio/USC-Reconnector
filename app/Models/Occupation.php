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
        'carolinian_id'
    ];

    public function carolinian()
    {
    	return $this->belongsTo('App\Models\Carolinian','carolinian_id');
    }

    public function company()
    {
    	return $this->belongsTo('App\Models\Company','company_id');
    }
}
