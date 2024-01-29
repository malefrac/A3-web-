<?php

namespace App\Models;

use Database\Seeders\EnviromentTypeSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningEnviroment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'capacity',
        'area_mt2',
        'floor',
        'inventory',
        'id_type',
        'id_location',
        'status'
    ];

    public function enviroment_type()
    {
        return $this->belongsTo(EnviromentType::class,'id_type');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'id_location');
    }

    public function scheduling_enviroments()
    {
        return $this->hasMany(SchedulingEnviroment::class);
    }

}
