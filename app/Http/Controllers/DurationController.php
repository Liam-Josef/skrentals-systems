<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Duration;
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
}
