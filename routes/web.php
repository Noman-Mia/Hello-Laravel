<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;


Route::get('/about', [AboutController::class,'about']);
Route::get('/download',[FileController::class,'download']);