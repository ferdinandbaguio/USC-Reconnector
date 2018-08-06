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
        return $this->belongsTo('App\Carolinian','carolinian_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    public function message_thread()
    {
        return $this->hasMany('App\Message_Thread','message_id');
    }
}
