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




//    public function attach_duration(Type $type) {
//        $type->durations()->attach(request('duration'));
//        return back();
//    }





}
