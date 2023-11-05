<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use Illuminate\Http\Request;

class PeekProController extends Controller
{
    public function receiveReservation(Request $request)
    {
        // Get the reservation data from the request
        $reservationData = $request->all();

        // Process and store the reservation data in your Laravel system
        // For example, you can save it to your database
        // You may need to customize this part according to your database structure

        // Sample code to save the reservation data to a database
        // Replace 'Reservation' with your actual model name
        dd($reservationData);
//        $reservation = new Rental();
//        $reservation->fill($reservationData);
//        $reservation->save();

        return response('Reservation data received and processed.', 200);
    }
}


//public function addRental() {
//    Rental::create([
//        'booking_id' => request('booking_id'),
//        'purchase_type' => request('purchase_type'),
//        'purchase_date' => request('purchase_date'),
//        'activity_date' => request('activity_date'),
//        'activity_item' => request('activity_item'),
//        'first_name' => request('first_name'),
//        'last_name' => request('last_name'),
//        'zip_code' => request('zip_code'),
//        'payment_type' => request('payment_type'),
//        'payment_status' => request('payment_status'),
//        'ticket_list' => request('ticket_list'),
//        'email' => request('email'),
//        'phone' => request('phone'),
//        'source' => request('source'),
//        'customer_notes' => request('customer_notes'),
//        'list_price' => request('list_price'),
//        'total_discount_amount' => request('total_discount_amount'),
//        'customer_fees' => request('customer_fees'),
//        'total_charge' => request('total_charge'),
//        'status' => request('status'),
//        'precheck_by' => request('precheck_by', '0'),
//    ]);
//    return back();
//}
