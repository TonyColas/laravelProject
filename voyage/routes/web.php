<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StaticPageController::class, 'home'])->name('home');
Route::get('trips', [StaticPageController::class, 'trips'])->name('trips');
Route::get('trip/{id}', [StaticPageController::class, 'trip']);
Route::get('aboutus', function () {
    return view("aboutus", ['viewName' => Route::currentRouteName()]);
})->name('aboutus');
Route::get('contact', function () {
    return view("contact", ['viewName' => Route::currentRouteName()]);
})->name('contact');
Route::get('details', function () {
    return view("details", ['viewName' => Route::currentRouteName()]);
})->name('details');