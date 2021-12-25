<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

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

//public routes

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('card-details/{card_id}', [CardController::class, 'showDetails'])->name('singleCard');
Route::get('active-ico-list', [indexController::class, 'active_ico'])->name('active_ico');
Route::get('upcoming-ico-list', [indexController::class, 'UpComing_ico'])->name('UpComing_ico');
Route::get('ended-ico-list', [indexController::class, 'Ended_ico'])->name('Ended_ico');
Route::get('sandbox-ico-list', [indexController::class, 'SandBox_ico'])->name('SandBox_ico');






//protected routes
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('admin', function() {
        return view('admin.index');
    })->name('admin');

    Route::get('dashboard',function(){
        return view('dashboard.dashboard');
    })->name('dashboard');

    route::resource('cards',CardController::class);
    route::get('archived', [CardController::class, 'archived'])->name('archived');



});


