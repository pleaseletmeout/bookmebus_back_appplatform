<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    
    use HasFactory;
    protected $primaryKey = "schedule_id";
    protected $foreignKey = 'bus_route_id';

    protected $fillable = [
        
        'departure_time',
        'arrival_time',
        
        'price',
        'max_seat',
        'bus_route_id',
        'created_at',
        'updated_at'
    ];

    
}
