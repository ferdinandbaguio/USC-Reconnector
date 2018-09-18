<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function carolinian()
    {
    	return $this->belongsToMany('App\Carolinian','role_id');
    }
}
