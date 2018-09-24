<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graduation extends Model
{
    protected $fillable = [
        'dateOfGraduation',
        'batch'
    ];

    public function graduate()
    {
        return $this->hasMany('App\Models\Graduate','graduation_id');
    }
}
