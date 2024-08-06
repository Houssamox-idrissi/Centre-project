<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use Illuminate\Http\Request;

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
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants');
Route::post('/post_etudiants', [EtudiantController::class, 'add'])->name('post_etud');
Route::delete('/detet_etudiant_num/{id}', [EtudiantController::class, 'delete'])->name('delete_etudiant_num');
Route::post('/update_etudiant_num/{id}',[EtudiantController::class, 'update'])->name('update_etude');