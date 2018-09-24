<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message_Category extends Model
{
    public function message()
    {
        return $this->belongsTo('App\Models\Message','message_id');
    }

    public function filter()
    {
        return $this->belongsTo('App\Models\Filter','filter_id');
    }
}
