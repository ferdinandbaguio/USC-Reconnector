<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // protected $guarded = [];

    // public function fromContact()
    // {
    //     return $this->hasOne(User::class, 'id', 'from');
    // }

    protected $table = 'messages';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'picture',
        'title',
        'sender'
    ];

    public function message_thread()
    {
        return $this->hasMany('App\Models\Message_Thread','message_thread_id');
    }

    public function receivers()
    {
        return $this->hasMany('App\Models\Receiver');
    }

    public function filter()
    {
        return $this->hasOne('App\Models\Filter');
    }

}
