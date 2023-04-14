<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //

    public function index() {
        return view('admin.training.index', [
            'applications' => Application::where('id', '=', '1')->get(),
        ]);
    }


}
