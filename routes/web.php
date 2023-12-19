<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ECController;
use App\Http\Controllers\EnseignerController;
use App\Http\Controllers\EtreResponsableController;
use App\Http\Controllers\EvaluerController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscrireController;
use App\Http\Controllers\UEController;
use App\Http\Controllers\UtilisateurController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('accueil');
});


Route::resource('formations', FormationController::class);
Route::resource('classes', ClasseController::class);
Route::resource('utilisateurs', UtilisateurController::class);
Route::resource('ECS', ECController::class);
Route::resource('enseigners', EnseignerController::class);
Route::resource('EtreResponsables', EtreResponsableController::class);
Route::resource('evaluers', EvaluerController::class);
Route::resource('inscrires', InscrireController::class);
Route::resource('UES', UEController::class);



