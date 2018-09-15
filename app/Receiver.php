<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    public function message()
    {
    	return $this->belongsTo('App\Message','message_id');
    }

    public function recipient()
    {
    	return $this->belongsTo('App\Carolinian','carolinian_id');
    }
}
