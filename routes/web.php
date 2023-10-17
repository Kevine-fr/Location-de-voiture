<?php

use Illuminate\Support\Facades\Route;

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




Route::prefix('admin')->name('admin')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('');
    Route::prefix('voitures')->name('.voitures')->group(function () {
        Route::get('/liste', function () {
            return view('voitures.liste');
        })->name('.liste');
        Route::get('/details/{id}', function ($id) {
            // $v = Voiture::find($id)
            // return view('voitures.details', compact('v'));
            return view('voitures.details');
        })->name('.details');
        
    });
});