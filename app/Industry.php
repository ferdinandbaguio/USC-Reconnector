<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = [
        'name',
        'description',
        'service'
    ];

    public function company(')
    {
    	return $this->hasOne('App\Company','company_id');
    }
}
