<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title'
    ];

    public function exact_job()
    {
        return $this->hasMany('App\Exact_Job','job_id');
    }

    public function related_job()
    {
        return $this->hasMany('App\Related_Job','job_id');
    }
}
