<?php

use App\Http\Controllers\DanhMucGameController;
use Illuminate\Support\Facades\Route;



Route::get('/',[DanhMucGameController::class,'index']);
Route::get('/admin',[DanhMucGameController::class,'indexAdmin']);
Route::get('/view-danh-muc',[DanhMucGameController::class,'indexDanhMucgame']);
Route::get('/view-dich-vu',[DanhMucGameController::class,'indexDichVuGame']);
Route::get('/view-mini-game',[DanhMucGameController::class,'indexMiniGame']);
Route::get('/view-contact',[DanhMucGameController::class,'indexContact']);
