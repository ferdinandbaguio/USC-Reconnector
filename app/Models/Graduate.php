<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    public function graduation()
    {
        return $this->belongsTo('App\Models\Graduation','graduation_id');
    }

    public function alumni()
    {
        return $this->belongsTo('App\Models\User','uesr_id');
    }
}
