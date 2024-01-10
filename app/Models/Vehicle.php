<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $guarded = [];

//    protected $fillable = [
//        'internal_vehicle_id',
//        'vehicle_type',
//        'status',
//        'location',
//        'year',
//        'model',
//        'vin',
//        'or_number',
//        'hours_updated',
//        'current_hours',
//        'expected_hours',
//        'remaining_hours',
//        'previous_hours',
//        'last_serviced',
//        'launched'
//    ];
    use HasFactory;

    public function cocs() {
        return $this->belongsToMany(Coc::class);
    }

    public function maintenances() {
        return $this->belongsToMany(Maintenance::class);
    }

    public function rentals() {
        return $this->belongsToMany(Rental::class);
    }
    public function rental() {
        return $this->belongsToMany(Rental::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

}
