<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addition;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdditionController extends Controller
{

    public function store()
    {
        $addition = new Addition();
        $addition->name = request('name');
        $addition->slug = Str::of(Str::lower(request('name')))->slug('-');
        $addition->cost = request('cost');
        $addition->description = request('description');
        $addition->quantity = request('quantity');
        $addition->visible = request('visible');
        $addition->save();

        if (request('image')) {
            $addition->update(['image' => request('image')->store('app-images')]);
        }

        $addition->types()->attach(request('type_id'));

        return back();
    }

    public function attachAddition(Addition $addition)
    {
        $addition->types()->attach(request('type_id'));
        return back();
    }

    public function detachAddition(Addition $addition)
    {
        $addition->types()->detach(request('type_id'));

        return back();
    }

    public function update(Addition $addition)
    {
        if (request('name')) {
            $addition->update(['name' => request('name')]);
        }
        if (request('cost')) {
            $addition->update(['cost' => request('cost')]);
        }
        if (request('description')) {
            $addition->update(['description' => request('description')]);
        }
        if (request('quantity')) {
            $addition->update(['quantity' => request('quantity')]);
        }
        if (request('visible')) {
            $addition->update(['visible' => request('visible')]);
        }
        if (request('image')) {
            $addition->update(['image' => request('image')->store('app-images')]);
        }
        return back();
    }




}
