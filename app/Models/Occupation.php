<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{	
    protected $table = 'occupations';
    public $primaryKey = 'id';
    public $timestamps = true;

	protected $fillable = [
        'title',
        'address',
        'salaryRangeOne',
        'salaryRangeTwo',
        'jobStart',
        'jobEnd',
        'country_id',
        'area_id',
        'company_id',
        'alumni_id'
    ];

    public function alumni()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function company()
    {
    	return $this->belongsTo('App\Models\Company');
    }

    public function area()
    {
    	return $this->belongsTo('App\Models\Area');
    }

    public function country()
    {
    	return $this->belongsTo('App\Models\Country');
    }
}
