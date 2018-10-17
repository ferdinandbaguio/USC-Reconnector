<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'address',
        'description',
        'picture',
        'linkage_id',
        'country_id',
        'area_id'
    ];

    public function occupations()
    {
    	return $this->hasOne('App\Models\Occupation');
    }
    public function country()
    {
    	return $this->belongsTo('App\Models\Country');
    }
    public function area()
    {
    	return $this->belongsTo('App\Models\Area');
    }
}
