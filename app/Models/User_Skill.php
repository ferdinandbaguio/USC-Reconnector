<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Skill extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function skill()
    {
        return $this->belongsTo('App\Models\Skill','skill_id');
    }
}
