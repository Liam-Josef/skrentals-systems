<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Reschedule;
use Illuminate\Http\Request;

class RescheduleController extends Controller
{

    public function reschedule_day(){
        $reschedule = new Reschedule();
        $reschedule->booking_id = request('booking_id');
        $reschedule->type_name = request('type_name');
        $reschedule->type_id = request('type_id');
        $reschedule->orig_type_id = request('type_id');
        $reschedule->duration_id = request('duration_id');
        $reschedule->orig_duration_id = request('orig_duration_id');
        $reschedule->hour = request('hour');
        $reschedule->orig_hour = request('hour');
        $reschedule->rental_time = request('rental_time');
        $reschedule->orig_activity_date_start = request('activity_date_start');
        $reschedule->end_time = request('end_time');
        $reschedule->activity_date_end = request('activity_date_end');
        $reschedule->orig_activity_date_end = request('activity_date_end');
        $reschedule->quantity = request('quantity');
        $reschedule->orig_quantity = request('quantity');
        $reschedule->cost_per = request('cost_per');
        $reschedule->orig_cost_per = request('cost_per');
        $reschedule->additions = request('additions');
        $reschedule->orig_additions = request('additions');
        $reschedule->fees = request('fees');
        $reschedule->orig_fees = request('fees');
        $reschedule->total_cost = request('total_cost');
        $reschedule->orig_total_cost = request('total_cost');
        $reschedule->total_paid = request('total_paid');
        $reschedule->orig_total_paid = request('total_paid');
        $reschedule->total_owed = request('total_owed');
        $reschedule->orig_total_owed = request('total_owed');
        $reschedule->internal_notes = request('internal_notes');
        $reschedule->finalized = request('finalized');
        $reschedule->activity_date_start = request('activity_date_start');
        $reschedule->save();


        $reschedule->bookings()->attach(request('booking_id'));

//        $booking->update(['reschedule_id' => $reschedule->value('id')]);


        return redirect()->route('office.reschedule_booking_duration', ['reschedule' => $reschedule])->with(['submitted' => true]);
    }





    public function update_date(Reschedule $reschedule){
        $reschedule->update(['activity_date_start' => request('activity_date_start')]);
        $reschedule->update(['duration_id' => request('duration_id')]);
        $reschedule->update(['activity_date_end' => request('activity_date_end')]);

//        if ($reschedule->durations()->contains('duration_id')) {
//            $reschedule->durations()->detach(request('duration_id'));
//        }
//        if (request('duration_id') != '0') {
//            $booking->durations()->detach(request('duration_id'));
//        }

        return redirect()->route('office.reschedule_booking_duration', ['reschedule' => $reschedule])->with(['submitted' => true]);
    }

    public function add_duration(Reschedule $reschedule){
        $reschedule->update(['duration_id' => request('duration_id')]);
        $reschedule->update(['hour' => request('hour')]);
        $reschedule->update(['cost_per' => request('cost_per')]);



        return redirect()->route('office.reschedule_booking_time', ['reschedule' => $reschedule])->with(['submitted' => true]);
    }

    public function change_duration(Reschedule $reschedule){
        $reschedule->update(['duration_id' => '0']);
        $reschedule->update(['hour' => '0']);


        return redirect()->route('office.reschedule_booking_duration', ['reschedule' => $reschedule])->with(['submitted' => true]);
    }

    public function update_time(Reschedule $reschedule){
        $reschedule->update(['rental_time' => request('rental_time')]);
        $reschedule->update(['activity_date_start' => request('activity_date_start')]);
        $reschedule->update(['activity_date_end' => request('activity_date_end')]);


        return redirect()->route('office.reschedule_booking_additions', ['reschedule' => $reschedule])->with(['submitted' => true]);
    }

    public function book_rental_additions(Reschedule $reschedule){
        $reschedule->update(['cost_per' => request('cost_per')]);
        $reschedule->update(['fees' => request('fees')]);
        $reschedule->update(['hour' => request('hour')]);
        $reschedule->update(['quantity' => request('quantity')]);
        $reschedule->update(['total_cost' => request('total_cost')]);
        $reschedule->update(['activity_date_start' => request('activity_date_start')]);
        $reschedule->update(['activity_date_end' => request('activity_date_end')]);
        $reschedule->update(['end_time' => request('end_time')]);


        if(request('hour') >= '1') {
            $bookHr = request('hour');
            $reschedule->update(['activity_date_end' => \Carbon\Carbon::parse(request('activity_date_start'))->addHour($bookHr)]);
            $reschedule->update(['end_time' => \Carbon\Carbon::parse(request('activity_date_start'))->addHour($bookHr)->format('H:i:s')]);
        }

        return redirect()->route('office.reschedule_booking_confirmation', ['reschedule' => $reschedule])->with(['submitted' => true]);
    }

    public function reschedule_cancel(Booking $booking) {

        $booking->reschedules()->detach(request('reschedule_id'));

        Reschedule::where('id', '=', request('reschedule_id'))->delete();

        return redirect()->route('office.index');
    }

    public function reschedule_book(Reschedule $reschedule){
        $reschedule->update(['finalized' => '1']);
        $reschedule->update(['ip' => request('ip')]);


        $reschedule->bookings()->update(['ticket_list'=>request('ticket_list')]);
        $reschedule->bookings()->update(['type_id'=>request('type_id')]);
        $reschedule->bookings()->update(['duration_id'=>request('duration_id')]);
        $reschedule->bookings()->update(['hour'=>request('hour')]);
        $reschedule->bookings()->update(['activity_date_start'=>request('activity_date_start')]);
        $reschedule->bookings()->update(['activity_date_end'=>request('activity_date_end')]);
        $reschedule->bookings()->update(['quantity'=>request('quantity')]);
        $reschedule->bookings()->update(['cost_per'=>request('cost_per')]);
        $reschedule->bookings()->update(['additions'=>request('additions')]);
        $reschedule->bookings()->update(['taxes'=>request('taxes')]);
        $reschedule->bookings()->update(['total_cost'=>request('total_cost')]);
        $reschedule->bookings()->update(['total_owed'=>request('total_owed')]);
        $reschedule->bookings()->update(['activity_item'=>request('activity_item')]);
        $bookID = $reschedule->bookings()->value('id');

        return redirect()->route('office.update_booking', ['booking' => $bookID])->with(['submitted' => true]);
    }




}
