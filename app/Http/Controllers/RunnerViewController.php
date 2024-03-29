<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Rental;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RunnerViewController extends Controller
{
    public function index() {
        $rentals = Rental::orderBy('updated_at', 'asc')->get();
        $today = Carbon::now('PST')->toDateString();
        return view('runnerview.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'users' => User::all(),
            'vehicles' => Vehicle::all(),
            'today' => $today
        ]);
    }
}
