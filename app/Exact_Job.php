<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exact_Job extends Model
{
    public function course()
    {
    	return $this->belongsTo('App\Course','course_id');
    }

    public function job()
    {
    	return $this->belongsTo('App\Job','job_id');
    }
}
