<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group_Schedule extends Model
{
    protected $table = 'group_schedules';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'group_class_id',
        'schedule_id',
    ];

    public function group_class()
    {
        return $this->belongsTo('App\Models\Group_Class', 'group_class_id');
    }
    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule');
    }
}
