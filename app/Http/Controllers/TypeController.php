<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    public function store() {
        request()->validate([
            'name' => ['required']
        ]);
        Type::create([
            'name' => Str::ucfirst(request('name')),
            'is_active' => request('is_active'),
//            'slug' => Str::of(Str::lower(request('name')))->slug('-'),
        ]);

        return back();
    }
}
