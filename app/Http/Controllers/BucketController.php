<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bucket;
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

//        $rental->customers()->attach(request('customer'));

        return redirect()->route('home.book_rental_duration', ['bucket' => $bucket])->with(['submitted' => true]);
    }

    public function update_date(Bucket $bucket){
        $bucket->update(['rental_date' => request('rental_date')]);
        return back();
    }



}
