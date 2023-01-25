<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_route extends Model
{
    use HasFactory;
    protected $primaryKey = "bus_route_id";
    protected $fillable = [
        'origin',
        'destination',
        'operator_id'
    ];
}
