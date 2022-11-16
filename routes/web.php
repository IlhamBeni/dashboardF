<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSatuController;
use App\Http\Controllers\DashboardDuaController;
use App\Http\Controllers\DashboardEmpatController;
use App\Http\Controllers\DashboardLimaController;
use App\Http\Controllers\DashboardShowController;
use App\Http\Controllers\DashboardTigaController;
use GuzzleHttp\Middleware;

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
})->middleware('isLogin');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginproses', [LoginController::class, 'loginproses']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/satu', DashboardSatuController::class)->middleware('auth');

Route::resource('/dashboard/dua', DashboardDuaController::class)->middleware('auth');

Route::resource('/dashboard/tiga', DashboardTigaController::class)->middleware('auth');

Route::resource('/dashboard/empat', DashboardEmpatController::class)->middleware('auth');

Route::resource('/dashboard/lima', DashboardLimaController::class)->middleware('auth');

Route::get('/dashboard/sata', [DashboardShowController::class, 'show'])->middleware('auth');