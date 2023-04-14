<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalHistory extends Model
{
    use HasFactory;

protected $guarded = [];

    public function customers() {
        return $this->belongsToMany(Customer::class);
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function cocs() {
        return $this->belongsToMany(Coc::class);
    }
    public function vehicles() {
        return $this->belongsToMany(Vehicle::class);
    }



}
