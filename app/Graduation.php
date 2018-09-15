<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduation extends Model
{
    protected $fillable = [
        'dateOfGraduation',
        'batch'
    ];

    public function graduate()
    {
        return $this->hasMany('App\Graduate','graduation_id');
    }
}
