<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchedulingEnviroment extends Model
{
    use HasFactory;
    protected $table = 'scheduling_enviroment';
    protected $fillable = [
        'id_course',
        'document_instructor',
        'date_scheduling',
        'initial_hour',
        'final_hour',
        'id_enviroment'
    ];

    public function scheduling_enviroment()
    {
        return $this->belongsTo(SchedulingEnviroment::class, 'id_enviroment');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'document');
    }
}
