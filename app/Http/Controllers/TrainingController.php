<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Website;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //

    public function index() {
        return view('admin.training.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }


}
