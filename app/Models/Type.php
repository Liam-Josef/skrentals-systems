<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function additions() {
        return $this->belongsToMany(Addition::class);
    }
    public function buckets() {
        return $this->belongsToMany(Bucket::class);
    }
    public function availabils() {
        return $this->belongsToMany(Availabil::class);
    }
    public function durations() {
        return $this->belongsToMany(Duration::class);
    }
    public function prices() {
        return $this->belongsToMany(Price::class);
    }
    public function rentals() {
        return $this->belongsToMany(Rental::class);
    }
}
