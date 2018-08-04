<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carolinian_Skill extends Model
{
    public function carolinian()
    {
        return $this->belongsTo('App\Carolinian','carolinian_id');
    }
    public function skill()
    {
        return $this->belongsTo('App\Skill','skill_id');
    }
}
