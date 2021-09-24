<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Voyage;

class StaticPageController extends Controller
{
    public function home() {
        return view("home", ['viewName' => Route::currentRouteName(), 'voyages' => Voyage::where('topPlace', 1)->get()]);
    }

    public function trips() {
        return view("trips", ['viewName' => Route::currentRouteName(), 'voyages' => Voyage::all()]);
    }

    public function trip($id) {
        return view("trip", ['viewName' => Route::currentRouteName(), 'voyage' => Voyage::find($id)]);
    }
}
