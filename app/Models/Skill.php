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

   public function carolinian_skill()
   {
       return $this->hasMany('App\Models\Carolinian_Skill','skill_id');
   } 
}
