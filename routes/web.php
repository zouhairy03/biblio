<?php

use App\Http\Controllers\EmprunterController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\LivreController;
use App\Models\Etudiant;
use App\Models\Livre;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('filieres', FiliereController::class);
Route::resource('etudiants', EtudiantController::class);
Route::resource('livres', LivreController::class);
//affiche la page emprunt
Route::get('/emprunter', [EmprunterController::class, 'emprunter'])->name('emprunter.create');
// traite le form d'emprunt
Route::post('/emprunter', [EmprunterController::class, 'borrow'])->name('emprunter.store');

