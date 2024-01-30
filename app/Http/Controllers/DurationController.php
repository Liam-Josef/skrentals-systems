<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Availabil;
use App\Models\Duration;
use App\Models\Price;
use App\Models\Rental;
use App\Models\Type;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DurationController extends Controller
{

    public function duration_settings(Duration $duration) {
        $rentals = Rental::all();
        $types = Type::all();
        $durations = Duration::all();
        $prices = Price::all();
        $availabils= Availabil::all();
        $today = Carbon::now('PST')->toDateString();
        return view('admin.rentals.duration-settings', [
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'today' => $today,
            'types' => $types,
            'durations' => $durations,
            'duration' => $duration,
            'prices' => $prices,
            'availabils' => $availabils,
        ]);
    }
    public function store() {
        request()->validate([
            'name' => ['required']
        ]);
        Duration::create([
            'name' => Str::ucfirst(request('name')),
            'is_active' => request('is_active'),
            'slug' => Str::of(Str::lower(request('name')))->slug('-'),
        ]);

        return back();
    }



    public function duration_price() {
        $price = new Price();
        $price->amount = request('amount');
        $price->duration_id = request('duration_id');
        $price->type_id = request('type_id');
        $price->save();

        $price->durations()->attach(request('duration_id'));

        return back();
    }

    public function update(Duration $duration) {
        if(request('name')) {
            $duration->update(['name' => request('name')]);
        }
        if(request('slug')) {
            $duration->update(['slug' => Str::of(Str::lower(request('name')))->slug('-')]);
        }
        if(request('hour')) {
            $duration->update(['hour' => request('hour')]);
        }
        if(request('day')) {
            $duration->update(['day' => request('day')]);
        }
        if(request('night')) {
            $duration->update(['night' => request('night')]);
        }
        if(request('before_hour')) {
            $duration->update(['before_hour' => request('before_hour')]);
        }
        if(request('before_minute')) {
            $duration->update(['before_minute' => request('before_minute')]);
        }
        if(request('after_hour')) {
            $duration->update(['after_hour' => request('after_hour')]);
        }
        if(request('after_minute')) {
            $duration->update(['after_minute' => request('after_minute')]);
        }

        return back();

    }



    public function detach_duration(Duration $duration) {
        $duration->types()->detach(request('type_id'));
        return back();
    }





}
