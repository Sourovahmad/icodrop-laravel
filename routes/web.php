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

Route::get('/', [indexController::class, 'index'])->name('index');


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('admin', function() {
        return view('admin.index');
    })->name('admin');

    route::resource('cards',CardController::class);
});


