<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

// protected $fillable = ['name', 'email', 'phone', 'course_id'];



class Student extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
