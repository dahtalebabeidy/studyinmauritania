<?php

use App\Http\Controllers\StatistiqueController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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


Route::get('/villes',[VilleController::class,'index'])->name('Villes.index');
Route::get('/villes/{ville}',[VilleController::class,'show'])->name('Villes.show');

Route::get('/universities', [UniversiteController::class, 'index'])->name('universities.index');
Route::get('/universites/{universite}', [UniversiteController::class, 'show'])->name('Universites.show');

Route::get('/departements', [DepartementController::class, 'index'])->name('Departements.index');
Route::get('/departements/{departement}', [DepartementController::class, 'show'])->name('Departements.show');

Route::get('/statistiquesNktt',[StatistiqueController::class,'indexNktt'])->name('Statistiques.indexNktt');
Route::get('/statistiquesNdb',[StatistiqueController::class, 'indexNdb'])->name('Statistiques.indexNdb');
Route::get('/statistiquesZrt',[StatistiqueController::class, 'indexZrt'])->name('Statistiques.indexZrt');
Route::get('/statistiquesLayoune',[StatistiqueController::class, 'indexLayoune'])->name('Statistiques.indexLayoune');
Route::get('/statistiquesAleg',[StatistiqueController::class, 'indexAleg'])->name('Statistiques.indexAleg');
Route::get('/statistiquesRosso',[StatistiqueController::class, 'indexRosso'])->name('Statistiques.indexRosso');

Route::get('/pourquoi-la-mauritanie', [CommentController::class, 'show'])->name('prq');
