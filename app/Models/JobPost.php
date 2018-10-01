<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = [
        'user_id',
        'companyName',
        'address',
        'jobTitle',
        'description',
        'salaryRange',
        'contactNo',
        'email',
        'image',
        'jobStatus'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
