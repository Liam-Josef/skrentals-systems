<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hours() {

    }

    public function cocs() {
        return $this->belongsTo(Coc::class);
    }

    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function vehicle() {
        return $this->belongsToMany(Vehicle::class);
    }
    public function rentals() {
        return $this->belongsToMany(Rental::class);
    }

}
