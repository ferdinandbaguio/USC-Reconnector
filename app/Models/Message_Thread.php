<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message_Thread extends Model
{
    protected $fillable = [
        'title',
        'message'
    ];

    public function message()
    {
        return $this->belongsTo('App\Models\Message','message_id');
    }
}
