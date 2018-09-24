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
        return $this->belongsTo('App\Models\Year','year_id');
    }

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule','semester_id');
    }
}
