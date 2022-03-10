<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PersonController::class,'index']);
Route::post('/import',[PersonController::class,'import']);
