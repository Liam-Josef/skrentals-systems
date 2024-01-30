<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rentals() {
        return $this->belongsToMany(Rental::class);
    }
    public function customers() {
        return $this->belongsToMany(Customer::class);
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function cards() {
        return $this->belongsToMany(Card::class);
    }
    public function buckets() {
        return $this->belongsToMany(Bucket::class);
    }
    public function reschedules() {
        return $this->belongsToMany(Reschedule::class);
    }


}
