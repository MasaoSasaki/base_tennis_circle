<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
  return view('welcome');
});
Route::group(['middleware' => 'basicauth'], function() {
  Route::get('events', [EventController::class, 'index']);
});
Route::get('events/create', [EventController::class, 'create']);
Route::post('events/upload', [EventController::class, 'upload']);

Auth::routes();

Route::get('home', [HomeController::class, 'index']);
