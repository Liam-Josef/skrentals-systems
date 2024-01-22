<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Availabil;
use App\Models\Duration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AvailabilityController extends Controller
{
    public function store(Duration $duration) {
        $availabil = new Availabil();
        $availabil->is_active = '1';
        $availabil->repeat_day = request('repeat_day');
        $availabil->repeat_week = request('repeat_week');
        $availabil->start_time = request('start_time');
        $availabil->end_time = request('end_time');
        $availabil->save();

//        $availabil->durations()->attach(request('duration_id'));
        $duration->availabils()->attach($availabil);

        return back();
    }

    public function attachAvail(Duration $duration) {
        $duration->availabils()->attach(request('availabil_id'));
        return back();
    }

    public function detachAvail(Duration $duration) {
        $duration->availabils()->detach(request('availabil_id'));

        return back();
    }

    public function update (Availabil $availabil) {
        if(request('start_min_increm')) {
            $availabil->update(['start_min_increm' => request('start_min_increm')]);
        }
        if(request('repeat_day')) {
            $availabil->update(['repeat_day' => request('repeat_day')]);
        }
        if(request('start_time')) {
            $availabil->update(['start_time' => request('start_time')]);
        }
        if(request('end_time')) {
            $availabil->update(['end_time' => request('end_time')]);
        }
        return back();
    }



}
