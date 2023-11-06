<?php

use App\Http\Controllers\DanhMucGameController;
use App\Http\Controllers\DichVuGameController;
use App\Http\Controllers\MiniGameModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/api-danhMucGame-nro',[DanhMucGameController::class,'layData']);
Route::get('/api-dichVuGame-nro',[DichVuGameController::class,'layData']);
Route::get('/api-miniGame-nro',[MiniGameModelController::class,'layData']);
Route::post('/api-taoData-miniGame-nro',[MiniGameModelController::class,'taoData']);
Route::post('/api-xoaData-miniGame-nro',[MiniGameModelController::class,'xoaData']);
