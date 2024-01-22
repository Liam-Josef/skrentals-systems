<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Availabil;
use App\Models\Duration;
use App\Models\Post;
use App\Models\Price;
use App\Models\Rental;
use App\Models\Type;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TypeController extends Controller
{

    public function settings(Type $type) {
        $rentals = Rental::all();
//        $type = Type::where('id', '=', $type)->get();
        $durations = Duration::all();
        $prices = Price::all();
        $availabil = Availabil::all();
        $today = Carbon::now('PST')->toDateString();
        return view('admin.types.settings', [
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'today' => $today,
            'type' => $type,
            'durations' => $durations,
            'prices' => $prices,
            'availabil' => $availabil,
        ]);
    }


    public function store() {
        request()->validate([
            'name' => ['required']
        ]);
        Type::create([
            'name' => Str::ucfirst(request('name')),
            'is_active' => request('is_active'),
            'slug' => Str::of(Str::lower(request('name')))->slug('-'),
        ]);

        return back();
    }

    public function update(Type $type) {
        $inputs = request()->validate([
            'name' => ['required'],
            'is_active' => ['required'],
            'booking_buffer_hr' => ['required'],
            'archive' => ['required']
        ]);
        if(request('image')) {
            $inputs['image'] = request('image')->store('app-images');
        }
        if(request('img_alt')) {
            $inputs['img_alt'] = request('img_alt');
        }
        if(request('description')) {
            $inputs['description'] = request('description');
        }
        if(request('quantity')) {
            $inputs['quantity'] = request('quantity');
        }
        if(request('capacity_count')) {
            $inputs['capacity_count'] = request('capacity_count');
        }
        if(request('weight_capacity')) {
            $inputs['weight_capacity'] = request('weight_capacity');
        }
        if(request('cancel_policy')) {
            $inputs['cancel_policy'] = request('cancel_policy');
        }
        if(request('pickup_details')) {
            $inputs['pickup_details'] = request('pickup_details');
        }
        if(request('pickup_address')) {
            $inputs['pickup_address'] = request('pickup_address');
        }
        if(request('what_to_know')) {
            $inputs['what_to_know'] = request('what_to_know');
        }
        if(request('what_to_bring')) {
            $inputs['what_to_bring'] = request('what_to_bring');
        }
        if(request('suggested_attire')) {
            $inputs['suggested_attire'] = request('suggested_attire');
        }
        $type->update($inputs);
        return back();
    }

    public function type_duration(Type $type) {
        $duration = new Duration();
        $duration->name = request('name');
        $duration->is_active = request('is_active');
        $duration->slug = Str::of(Str::lower(request('name')))->slug('-');
        $duration->save();

        $type->durations()->attach($duration);

        return back();
    }

    public function attach_duration(Type $type) {
        $type->durations()->attach(request('duration'));
        return back();
    }
//    public function detach_permission(Role $role) {
//        $role->permissions()->detach(request('permission'));
//        return back();
//    }




}
