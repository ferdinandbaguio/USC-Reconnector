<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\Carolinian','carolinian_id');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Schedule','schedule_id');
    }
}
