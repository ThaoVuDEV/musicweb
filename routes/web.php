<?php

use App\Http\Controllers\Admin\ArtistsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/", [HomeController::class,"index"])->name("home");
Route::get('/artists', [ArtistsController::class, 'index']);
Route::get('/get-artists-data', [ArtistsController::class, 'getArtistsData']);
Route::get('/artists/show/{id}', [ArtistsController::class, 'show'])->name('show.artist');

Route::get('/admin', [DashboardController::class,'index'])->name('admin.home');
