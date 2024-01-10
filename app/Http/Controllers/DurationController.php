<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Duration;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DurationController extends Controller
{
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

//        $price->save($price->amount = request('amount'));

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



//    public function attach_duration(Type $type) {
//        $type->durations()->attach(request('duration'));
//        return back();
//    }





}
