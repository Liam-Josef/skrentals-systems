<?php

namespace App\Http\Controllers;

use App\Models\Coc;
use App\Models\Customer;
use App\Models\Rental;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class RentalHistories extends Controller
{
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
