<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;

Route::get('/', [PesanController::class,'index']);
Route::post('/kirim-pesan', [PesanController::class,'store']);