<?php

use App\Http\Controllers\VilleController;
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

