<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function buckets() {
        return $this->belongsToMany(Bucket::class);
    }
    public function types() {
        return $this->belongsToMany(Type::class);
    }
    public function availabils() {
        return $this->belongsToMany(Availabil::class);
    }
    public function prices() {
        return $this->belongsToMany(Price::class);
    }
    public function rentals() {
        return $this->belongsToMany(Rental::class);
    }
}
