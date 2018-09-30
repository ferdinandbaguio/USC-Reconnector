<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
            'title'
    ];

    public function exact_job()
    {
        return $this->hasMany('App\Models\Exact_Job','job_id');
    }

    public function related_job()
    {
        return $this->hasMany('App\Models\Related_Job','job_id');
    }
}
