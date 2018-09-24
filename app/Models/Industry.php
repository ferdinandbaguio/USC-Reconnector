<?php

namespace App\Models;

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
    	return $this->hasOne('App\Models\Company','company_id');
    }
}
