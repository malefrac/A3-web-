<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $fillable = [
        'shift',
        'id_career',
        'initial_date',
        'final_date',
        'status'
    ];

    public function career()
    {
        return $this->belongsTo(Career::class, 'id_career');
    }

    public function scheduling_enviroment()
    {
        return $this->belongsTo(SchedulingEnviroment::class, 'id_course');
    }
}
