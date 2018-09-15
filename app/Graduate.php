<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    public function graduation()
    {
        return $this->belongsTo('App\Graduation','graduation_id');
    }

    public function alumni()
    {
        return $this->belongsTo('App\Carolinian','carolinian_id');
    }
}
