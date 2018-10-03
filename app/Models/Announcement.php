<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'announcement',
        'image',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
