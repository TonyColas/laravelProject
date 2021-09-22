<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home() {
        return view("layouts.base");
    }

    public function trips() {
        return view("layouts.base");
    }

    public function trip($id) {
        return view("layouts.base");
    }
}
