<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'description',
        'percentage'
    ];

   public function user_skill()
   {
       return $this->hasMany('App\Models\User_Skill','skill_id');
   } 
}
