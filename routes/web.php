<?php

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
Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['auth', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', IndexController::class)->name('main.index');
    });

    Route::group(['namespace' => 'LicensePlate', 'prefix' => 'license_plates'], function () {
        Route::get('/', IndexController::class)->name('license_plates.index');
        Route::get('/create', CreateController::class)->name('license_plates.create');
        Route::post('/', StoreController::class)->name('license_plates.store');
        Route::get('/{license_plate}', ShowController::class)->name('license_plates.show');
        Route::get('/{license_plate}/edit', EditController::class)->name('license_plates.edit');
        Route::patch('/{license_plate}', UpdateController::class)->name('license_plates.update');
        Route::delete('/{license_plate}', DestroyController::class)->name('license_plates.destroy');
    });

    Route::group(['namespace' => 'Vehicle', 'prefix' => 'vehicles'], function () {
        Route::get('/', IndexController::class)->name('vehicles.index');
        Route::get('/create', CreateController::class)->name('vehicles.create');
        Route::post('/', StoreController::class)->name('vehicles.store');
        Route::get('/{vehicle}', ShowController::class)->name('vehicles.show');
        Route::get('/{vehicle}/edit', EditController::class)->name('vehicles.edit');
        Route::patch('/{vehicle}', UpdateController::class)->name('vehicles.update');
        Route::delete('/{vehicle}', DestroyController::class)->name('vehicles.destroy');
    });

    Route::group(['namespace' => 'Personal', 'prefix' => 'personal'], function () {
        Route::get('/', IndexController::class)->name('personal.index');
    });
});

Auth::routes(['verify' => true]);
