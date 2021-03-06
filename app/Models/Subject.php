<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'picture',
        'code',
        'name',
        'description'
    ];

    public function group_class()
    {
        return $this->hasMany('App\Models\Group_Class','subject_id');
    }
}
