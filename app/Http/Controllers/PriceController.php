<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PriceController extends Controller
{
//    public function store() {
//        request()->validate([
//            'amount' => ['required']
//        ]);
//        Price::create([
//            'amount' => request('amount'),
//            'is_multiday' => request('is_multiday'),
//        ]);
//
//        return back();
//    }

    public function update(Price $price) {
        $price->update(['amount' => request('amount')]);
        return back();
    }
    public function note(Price $price) {
        $price->update(['notes' => request('notes')]);
        return back();
    }


}
