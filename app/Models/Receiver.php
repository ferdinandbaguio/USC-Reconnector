<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    public function message()
    {
    	return $this->belongsTo('App\Models\Message','message_id');
    }

    public function recipient()
    {
    	return $this->belongsTo('App\Models\Carolinian','carolinian_id');
    }
}
