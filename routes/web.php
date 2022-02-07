<?php

use App\Http\Controllers\PesertaController;
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


Route::get('/', [PesertaController::class, 'index'])->name('peserta');
Route::get('/tambahpeserta', [PesertaController::class, 'tambahpeserta']);
Route::post('/insertpeserta', [PesertaController::class, 'insertpeserta']);
Route::get('/tampilpeserta/{id}', [PesertaController::class, 'tampilpeserta']);
Route::post('/updatepeserta/{id}', [PesertaController::class, 'updatepeserta']);
Route::get('/deletepeserta/{id}', [PesertaController::class, 'deletepeserta']);
Route::get('/detailpeserta/{id}', [PesertaController::class, 'detailpeserta']);
