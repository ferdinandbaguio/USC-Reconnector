<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message_Thread extends Model
{
    protected $table = 'message_threads';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'message',
        'message_id',
        'from_id'
    ];

    public function message_head()
    {
        return $this->belongsTo('App\Models\Message');
    }

    public function from()
    {
        return $this->belongsTo('App\Models\User','from_id');
    }
    
}
