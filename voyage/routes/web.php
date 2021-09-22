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

Route::get('/', [StaticPageController::class, 'home']);
Route::get('trips', [StaticPageController::class, 'trips']);
Route::get('trip/{id}', [StaticPageController::class, 'trip']);
Route::get('aboutus', [StaticPageController::class, 'aboutus']);
Route::get('contact', [StaticPageController::class, 'contact']);