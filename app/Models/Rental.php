<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{


    protected $guarded = [];


//    protected $fillable = [
//        'booking_id',
//        'purchase_type',
//        'purchase_date',
//        'activity_date',
//        'activity_item',
//        'first_name',
//        'last_name',
//        'zip_code',
//        'payment_type',
//        'payment_status',
//        'ticket_list',
//        'email',
//        'phone',
//        'phone2',
//        'source',
//        'customer_notes',
//        'list_price',
//        'total_discount_amount',
//        'customer_fees',
//        'total_charge',
//        'status',
//        'checked_in_by',
//        'launched_by',
//        'cleared_by',
//        'invoice_number',
//        'customer_id'
//    ];


    use HasFactory;

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
    public function vehicle() {
        return $this->hasMany(Vehicle::class);
    }
    public function maintenances() {
        return $this->belongsToMany(Maintenance::class);
    }
    public function bookings() {
        return $this->belongsToMany(Booking::class);
    }
    public function types() {
        return $this->belongsToMany(Type::class);
    }
    public function durations() {
        return $this->belongsToMany(Duration::class);
    }

}
