<?php

use App\Models\Marque;
use App\Models\Modele;
use App\Models\Statut;
use App\Models\Voitures;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarqueController;

use App\Http\Controllers\ModeleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoitureController;
//use App\Htpp\Controllers\ReservationsController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\ReservationsController;

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

Route::get('/reservation/liste',[ReservationsController::class,'allReservation'])->name('liste.reservations');


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->name('admin')->group(function () {
    Route::get('/', [AdministrateurController::class, 'index'])->middleware(['auth', 'verified']);
    Route::controller(VoitureController::class)->prefix('voitures')->name('.voitures')->group(function () {
        Route::get('/modifier','update')->name('.voitures');
        Route::get('/liste','index')->name('.liste'); //
        Route::get('/details/{id}','show')->name('.details');
        Route::post('/enregistrer','store')->name('.enregistrer');
        Route::get('/{voiture}/modifier','edit')->name('.modifier');
        Route::get('/{voiture_id}/info', 'getCarWithId')->name('.getCar');
        Route::delete('/{voiture}','destroy')->name('.destroy');

    });

});
// Route::get('/reservation/liste',[ReservationsController::class,'liste'])->name('liste.reservations');
Route::get('/reservation/send_mail',[ReservationsController::class,'sendMailToReservation'])->name('liste.sendMail');

Route::view('/maps','maps'); 


// marque routes start
// Afficher la liste des marques
Route::get('/marques', [MarqueController::class, 'liste'])->name('marques.liste');

// Afficher le formulaire de création d'une nouvelle marque
Route::get('/marques/create', [MarqueController::class, 'create'])->name('marques.create');

// Enregistrer une nouvelle marque
Route::post('/marques', [MarqueController::class, 'ajouter'])->name('marques.ajouter');

// Afficher les détails d'une marque
// Route::get('/marques/{marque}', [MarqueController::class, 'show'])->name('marques.show');

// Afficher le formulaire d'édition d'une marque
Route::get('/marques/{marque}/edit', [MarqueController::class, 'edit'])->name('marques.edit');

// Mettre à jour une marque
Route::put('/marques/{marque}', [MarqueController::class, 'update'])->name('marques.update');

// Supprimer une marque
Route::delete('/marques/{marque}', [MarqueController::class, 'destroy'])->name('marques.destroy');


// marque route end

// model route start

// Afficher la liste des modèles
Route::get('/modeles', [ModeleController::class, 'liste'])->name('modeles.liste');
Route::get('/modeles/create', [ModeleController::class, 'create'])->name('modeles.create');
Route::post('/modeles', [ModeleController::class, 'ajouter'])->name('modeles.ajouter');
Route::get('/modeles/{id}', [ModeleController::class, 'show'])->name('modeles.show');
Route::get('/modeles/{id}/edit', [ModeleController::class, 'edit'])->name('modeles.edit');
Route::put('/modeles/{id}', [ModeleController::class, 'update'])->name('modeles.update');
Route::delete('/modeles/{id}', [ModeleController::class, 'destroy'])->name('modeles.destroy');
// model route end
require __DIR__.'/auth.php';

//
