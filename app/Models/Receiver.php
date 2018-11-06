<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $table = 'receivers';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'is_seen',
        'message_id',
        'recipient_id'
    ];

    public function message()
    {
    	return $this->belongsTo('App\Models\Message');
    }

    public function recipient()
    {
    	return $this->belongsTo('App\Models\User', 'recipient_id');
    }
}
