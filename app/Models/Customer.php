<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

//    protected $fillable = [
//        'first_name',
//        'last_name',
//        'address_1',
//        'city',
//        'state',
//        'zip_code',
//        'phone',
//        'email',
//        'driver_license_state',
//        'driver_license_number',
//        'birth_date',
//        'how_heard',
//        'license_front',
//    ];

    protected $guarded = [];

    use HasFactory;


    public function cocs() {
        return $this->hasMany(Coc::class);
    }

    public function rentals() {
        return $this->belongsToMany(Rental::class);
    }

    public function customerRentals() {
        return $this->hasMany(Rental::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

//    public function getLicense_FrontAttribute($value) {
//        return asset($value);
//    }


}
