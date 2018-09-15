<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function sender()
    {
        return $this->belongsTo('App\Carolinian','carolinian_id');
    }

    public function receiver()
    {
        return $this->hasMany('App\Receiver','message_id');
    }

    public function message_category()
    {
        return $this->hasMany('App\Message_Category','message_id');
    }

    public function message_thread()
    {
        return $this->hasMany('App\Message_Thread','message_id');
    }
}
