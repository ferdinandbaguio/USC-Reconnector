<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exact_Job extends Model
{
    public function course()
    {
    	return $this->belongsTo('App\Models\Course','course_id');
    }

    public function job()
    {
    	return $this->belongsTo('App\Models\Job','job_id');
    }
}
