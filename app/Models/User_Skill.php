<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Skill extends Model
{
    protected $table = 'user_skills';
    public $primaryKey = 'id';
    public $timestamps = true;

	 protected $fillable = [
        'user_id',
        'skillName',
        'skillPercent'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
