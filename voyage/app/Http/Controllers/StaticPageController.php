<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home() {
        return view("home", ['viewName' => Route::currentRouteName()]);
    }

    public function trips() {
        return view("trips", ['viewName' => Route::currentRouteName()]);
    }

    public function trip($id) {
        return view("layouts.base", ['viewName' => Route::currentRouteName()]);
    }
}
