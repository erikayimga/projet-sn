<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\AbonneController;

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

Route ::get("/abonne_create",[AbonneController::class,"index"]);
Route ::get("/abonne_liste",[AbonneController::class,"create"]);
Route ::post("/abonne_insert",[AbonneController::class,"store"]);
Route ::get("/form_update_abonne/{id}",[AbonneController::class,"edit"]);
Route ::post("/abonne_update",[AbonneController::class,"update"]);
Route ::get("/abonne_delete/{id}",[AbonneController::class,"destroy"]);

Route ::get("/motivation_create",[MotivationController::class,"index"]);
Route ::get("/motivation_liste",[MotivationController::class,"create"]);
Route ::post("/motivation_insert",[MotivationController::class,"store"]);
Route ::get("/form_update_motivation/{id}",[MotivationController::class,"edit"]);
Route ::post("/motivation_update",[MotivationController::class,"update"]);
Route ::get("/motivation_delete/{id}",[MotivationController::class,"destroy"]);