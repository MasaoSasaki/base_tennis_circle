<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Admin\AlbumController as AdminAlbumController;
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
Route::resource('albums', AdminAlbumController::class)->only(['create', 'store']);
Route::post('albums/store', [AdminAlbumController::class, 'store']);
Route::group(['middleware' => 'basicauth'], function() {
  Route::resource('albums', AlbumController::class)->only(['index', 'show']);
});

Auth::routes();

Route::get('home', [HomeController::class, 'index']);
