<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{


    public function cancel(Booking $booking) {
        $booking->update(['is_active' => '0']);
        return redirect()->route('rental.index');

    }
    public function office_cancel(Booking $booking) {
        $booking->update(['is_active' => '0']);
        return redirect()->route('office.index');
    }
    public function update_booking_customer(Booking $booking) {
        $booking->update(['first' => response('first')]);
        $booking->update(['last' => response('last')]);
        $booking->update(['email' => response('email')]);
        $booking->update(['phone' => response('phone')]);
        return back();
    }


}
