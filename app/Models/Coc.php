<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coc extends Model
{
    use HasFactory;

    protected $fillable = [
        'incident',
        'image_1',
        'image_2',
        'last_4',
        'status'
    ];

    protected $guarded = [];

    public function customers() {
        return $this->hasMany(Customer::class);
    }

    public function rentals() {
        return $this->hasOne(Rental::class);
    }

    public function rentalHistories() {
        return $this->hasOne(Rental::class);
    }

    public function maintenances() {
        return $this->hasOne(Maintenance::class);
    }

    public function users() {
        return $this->hasOne(User::class);
    }

    public function vehicles() {
        return $this->hasOne(Vehicle::class);
    }


}
