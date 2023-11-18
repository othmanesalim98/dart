<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\chooseDartController;


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

Route::get('/', [Controller::class, 'index'])->name("home");
Route::get('/personneByMois', [Controller::class, 'getPersonnesBymois'])->name("personne.mois");



Route::get('personnes', [PersonneController::class, 'index'])->name("personnes");
Route::get('personnes/create', [PersonneController::class, 'create'])->name("personnes.create");
Route::post('personnes/create', [PersonneController::class, 'store'])->name("personnes.store");


Route::get('choose', [chooseDartController::class, 'index'])->name("choose");
Route::post('choose/create', [chooseDartController::class, 'store'])->name("choose.store");
