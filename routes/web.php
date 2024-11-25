<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;


Route::get('/about', [AboutController::class,'about']);
Route::get('/download',[FileController::class,'download']);
Route::get('download/invoice/{invoiceId}',[FileController::class,'downloadInvoice']);
Route::get('download/invoice',[FileController::class,'error']);