<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'sender_id'
    ];

    public function sender()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function receiver()
    {
        return $this->hasMany('App\Models\User','message_id');
    }

    public function filter()
    {
        return $this->hasOne('App\Models\Filter');
    }

    public function message_thread()
    {
        return $this->hasMany('App\Models\Message_Thread','message_id');
    }
}
