<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message_Category extends Model
{
    public function message()
    {
        return $this->belongsTo('App\Message','message_id');
    }

    public function filter()
    {
        return $this->belongsTo('App\Filter','filter_id');
    }
}
