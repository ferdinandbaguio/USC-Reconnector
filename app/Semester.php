<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
     protected $fillable = [
        'name'
     ];

     public function year()
    {
        return $this->belongsTo('App\Year','year_id');
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule','semester_id');
    }
}
