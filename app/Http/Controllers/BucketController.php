<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Bucket;
use App\Models\Card;
use Illuminate\Http\Request;

class BucketController extends Controller
{
    public function book_one(Request $request){
        $bucket = new Bucket();
        $bucket->rental_date = request('rental_date');
        $bucket->rental_time = request('rental_time');
        $bucket->duration_id = request('duration_id');
        $bucket->duration_name = request('duration_name');
        $bucket->type_id = request('type_id');
        $bucket->type_name = request('type_name');
        $bucket->save();


        $bucket->types()->attach(request('type_id'));

        return redirect()->route('home.book_rental_duration', ['bucket' => $bucket])->with(['submitted' => true]);
    }

    public function update_date(Bucket $bucket){
        $bucket->durations()->detach(request('duration_id'));
        $bucket->rental_date = request('rental_date');
        $bucket->rental_time = request('rental_time');
        $bucket->duration_id = request('duration_id');
        $bucket->duration_name = request('duration_name');
        $bucket->type_id = request('type_id');
        $bucket->type_name = request('type_name');

        if (request('activity_date_start')) {
            $bucket->activity_date_start = request('rental_date');
            $bucket->activity_date_end = request('rental_date');
        }
        $bucket->save();
        if (request('duration_id') != '0') {
            $bucket->durations()->detach(request('duration_id'));
        }

        return redirect()->route('home.book_rental_duration', ['bucket' => $bucket])->with(['submitted' => true]);
    }


    public function addDuration(Bucket $bucket){
        $bucket->update(['duration_id' => request('duration_id')]);
        $bucket->update(['duration_name' => request('duration_name')]);
        $bucket->update(['hour' => request('hour')]);

        if (request('duration_id') != '0') {
            $bucket->durations()->detach(request('duration_id'));
        }
        $bucket->durations()->attach(request('duration_id'));

        return redirect()->route('home.book_rental_time', ['bucket' => $bucket])->with(['submitted' => true]);
    }
    public function changeDuration(Bucket $bucket){
        $bucket->update(['duration_id' => '0']);
        $bucket->update(['duration_name' => 'none']);
        $bucket->update(['hour' => '0']);


        $bucket->durations()->detach(request('duration_id'));

        return redirect()->route('home.book_rental_duration', ['bucket' => $bucket])->with(['submitted' => true]);
    }

    public function update_time(Bucket $bucket){
        $bucket->update(['rental_time' => request('rental_time')]);
        $bucket->update(['activity_date_start' => request('activity_date_start')]);
        $bucket->update(['activity_date_end' => request('activity_date_end')]);
        $bucket->update(['avail_id' => request('avail_id')]);
        return redirect()->route('home.book_rental_info', ['bucket' => $bucket])->with(['submitted' => true]);
    }

    public function book_rental_additions(Bucket $bucket){
        $bucket->update(['cost_per' => request('cost_per')]);
        $bucket->update(['fees' => request('fees')]);
        $bucket->update(['hour' => request('hour')]);
        $bucket->update(['quantity' => request('quantity')]);
        $bucket->update(['total_cost' => request('total_cost')]);
        $bucket->update(['activity_date_start' => request('activity_date_start')]);
        $bucket->update(['activity_date_end' => request('activity_date_end')]);
        $bucket->update(['end_time' => request('end_time')]);


        if(request('hour') >= '1') {
            $bookHr = request('hour');
            $bucket->update(['activity_date_end' => \Carbon\Carbon::parse(request('activity_date_start'))->addHour($bookHr)]);
            $bucket->update(['end_time' => \Carbon\Carbon::parse(request('activity_date_start'))->addHour($bookHr)->format('H:i:s')]);
        }

        return redirect()->route('home.book_rental_customer_info', ['bucket' => $bucket])->with(['submitted' => true]);
    }

    public function book_rental_customer(Bucket $bucket){
        $bucket->update(['customer_first' => request('customer_first')]);
        $bucket->update(['customer_last' => request('customer_last')]);
        $bucket->update(['customer_ip' => request('customer_ip')]);
        $bucket->update(['reserved' => '1']);
        request()->validate([
            'customer_first' => ['required'],
            'customer_last' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'zip_code' => ['required'],
            'num_1' => ['required'],
            'num_2' => ['required'],
            'num_3' => ['required'],
            'num_4' => ['required'],
            'month' => ['required'],
            'year' => ['required'],
            'cvc' => ['required'],
            'card_name' => ['required']
        ]);

        $booking = new Booking();
        $booking->first = request('customer_first');
        $booking->last = request('customer_last');
        $booking->email = request('email');
        $booking->phone = request('phone');
        $booking->zip_code = request('zip_code');
        $booking->bucket_id = request('bucket_id');
        $booking->type_id = request('type_id');
        $booking->duration_id = request('duration_id');
        $booking->hour = request('hour');
        $booking->activity_date_start = request('activity_date_start');
        $booking->activity_date_end = request('activity_date_end');
        $booking->quantity = request('quantity');
        $booking->cost_per = request('cost_per');
        $booking->additions = request('additions');
        $booking->fees = request('fees');
        $booking->activity_item = request('activity_item');
        $booking->total_cost = request('total_cost');
        $booking->ticket_list = request('ticket_list');
        $booking->payment_type = 'Website';
        if (request('taxes')) {
            $booking->taxes = request('taxes');
        }
        if (request('total_paid')) {
            $booking->total_paid = request('total_paid');
        }
        if (request('total_owed')) {
            $booking->total_owed = request('total_owed');
        }
        if (request('customer_notes')) {
            $booking->customer_notes = request('customer_notes');
        }

        $booking->save();


        $card = new Card();
        $card->num_1 = request('num_1');
        $card->num_2 = request('num_2');
        $card->num_3 = request('num_3');
        $card->num_4 = request('num_4');
        $card->month = request('month');
        $card->year = request('year');
        $card->cvc = request('cvc');
        $card->card_name = request('card_name');
        $card->save();

        $card->bookings()->attach($booking);


        return redirect()->route('home.book_confirmation', ['bucket' => $bucket])->with(['submitted' => true]);
    }



}
