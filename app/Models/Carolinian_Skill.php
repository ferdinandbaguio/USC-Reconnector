<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carolinian_Skill extends Model
{
    public function carolinian()
    {
        return $this->belongsTo('App\Models\Carolinian','carolinian_id');
    }
    public function skill()
    {
        return $this->belongsTo('App\Models\Skill','skill_id');
    }
}
