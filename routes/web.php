<?php

use App\Models\Marque;
use App\Models\Modele;
use App\Models\Statut;
use App\Models\Voitures;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
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
    Route::get('/', function () {
        $voitures = Voitures::all();
        $marques = Marque::all();
        $modeles = Modele::all();
        $statuts = Statut::all();
        return view('dashboard',compact('voitures','marques','modeles','statuts'));
    })->name('');
    Route::controller(VoitureController::class)->prefix('voitures')->name('.voitures')->group(function () {
        Route::get('/modifier','update')->name('.voitures');
        Route::get('/liste','index')->name('.liste'); //
        Route::get('/details/{id}','show')->name('.details');
        Route::post('/enregistrer','store')->name('.enregistrer');
        Route::get('/{voiture}/modifier','edit')->name('.modifier');
        Route::delete('/{voiture}','destroy')->name('.destroy');
    });
});

require __DIR__.'/auth.php';
