<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
     protected $fillable = [
        'name'
     ];

     public function year()
    {
        return $this->belongsTo('App\Models\Year');
    }

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule');
    }
}
