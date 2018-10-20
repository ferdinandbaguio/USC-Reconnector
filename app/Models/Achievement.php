<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{

	 protected $fillable = [
        'user_id',
        'achTitle',
        'achYear'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
