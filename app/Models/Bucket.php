<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bucket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function additions() {
        return $this->belongsToMany(Addition::class);
    }
    public function durations() {
        return $this->belongsToMany(Duration::class);
    }
    public function types() {
        return $this->belongsToMany(Type::class);
    }
    public function availabils() {
        return $this->belongsToMany(Availabil::class);
    }
    public function bookings() {
        return $this->belongsToMany(Availabil::class);
    }

}
