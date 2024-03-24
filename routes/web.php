<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardFarmasiController;

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

Route::get('/dashboard/farmasi', [DashboardFarmasiController::class, 'index'])->name('dashboard.farmasi');
Route::get('/dashboard/farmasi/{page}', [DashboardFarmasiController::class, 'showPage'])->name('dashboard.page');
