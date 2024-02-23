<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $fillable = [
        'code',
        'shift',
        'career_id',
        'initial_date',
        'final_date',
        'status'
    ];

    public function career()
    {
        return $this->belongsTo(Career::class, 'career_id');
    }

    public function scheduling_enviroment()
    {
        return $this->belongsTo(SchedulingEnviroment::class, 'course_id');
    }
}
