<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateursController;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ReservationsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("register",[UtilisateursController::class,'register']);

Route::post("login", [UtilisateursController::class, 'login']);


    Route::group(['middleware' => ['auth:sanctum']], function(){
    // utilisateurs settings
    Route::get('profile',[UtilisateursController::class,'profile']);
    Route::get('logout',[UtilisateursController::class,'logout']);
    });

    Route::controller(VoitureController::class)->prefix('voitures')->name('.voitures')->group(function () {
        Route::get('/modifier','update')->name('.voitures');
        Route::get('/liste','index')->name('.liste'); //
        Route::get('/details/{id}','show')->name('.details');
        Route::post('/enregistrer','store')->name('.enregistrer');
        //Route::post('/modifier','edit')->name('.modifier');
        //Route::post('/supprimer','delete')->name('.supprimer');
    });

    Route::get('voitures',[VoitureController::class,'list']);
    Route::post('creer_reservation',[ReservationsController::class,'CreateReservation']);
    Route::get('reservations',[ReservationsController::class,'Reservations']);
    Route::delete('supprimer_reservation/{id}',[ReservationsController::class,'deleteReservation']);