<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function job()
    {
    	return $this->hasOne('App\Carolinian','role_id');
    }
}
