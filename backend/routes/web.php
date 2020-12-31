<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Admin\AlbumController as AdminAlbumController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
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
})->name('root');

Route::group(['middleware' => 'auth'], function() {
  Route::resource('admin/albums', AdminAlbumController::class)->only(['index', 'create', 'store']);
  Route::get('home', [AdminHomeController::class, 'index']);
});

Route::group(['middleware' => 'basicauth'], function() {
  Route::resource('albums', AlbumController::class)->only(['index', 'show']);
});

Auth::routes();

