<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function schedule()
    {
        return $this->belongsToMany('App\Models\Schedule','schedule_id');
    }
}
