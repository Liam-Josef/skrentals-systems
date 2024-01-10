<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Availabil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AvailabilityController extends Controller
{
    public function store() {
        request()->validate([
            'name' => ['required']
        ]);
        Availabil::create([
            'name' => Str::ucfirst(request('name')),
            'is_active' => request('is_active'),
            'slug' => Str::of(Str::lower(request('name')))->slug('-'),
        ]);

        return back();
    }
}
