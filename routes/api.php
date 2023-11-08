<?php

use App\Http\Controllers\chuyenDoiController;
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

Route::get('/api-danhMucGame-nro', [DanhMucGameController::class, 'layData']);
Route::get('/api-dichVuGame-nro', [DichVuGameController::class, 'layData']);
Route::get('/api-miniGame-nro', [MiniGameModelController::class, 'layData']);
Route::post('/api-taoData-miniGame-nro', [MiniGameModelController::class, 'taoData']);
Route::post('/api-xoaData-miniGame-nro', [MiniGameModelController::class, 'xoaData']);
Route::put('/api-updateData-miniGame-nro', [MiniGameModelController::class, 'updateData']);

// Danh Mục Game
Route::post('/api-taoData-danhMucGame-nro', [DanhMucGameController::class, 'taoData']);
Route::post('/api-xoaData-danhMucGame-nro', [DanhMucGameController::class, 'xoaData']);
Route::put('/api-updateData-danhMucGame-nro', [DanhMucGameController::class, 'updateData']);

// dichvugame
Route::post('/api-taoData-dichVuGame-nro', [DichVuGameController::class, 'taoData']);
Route::post('/api-xoaData-dichVuGame-nro', [DichVuGameController::class, 'xoaData']);
Route::put('/api-updateData-dichVuGame-nro', [DichVuGameController::class, 'updateData']);

// chuyển đổi trạng thái
Route::post('/api-chuyenDoiTrangThai-danhMucGame-nro', [chuyenDoiController::class, 'chuyenDoiTrangThaiDanhMucGame']);
Route::post('/api-chuyenDoiTrangThaiDV-danhMucGame-nro', [chuyenDoiController::class, 'chuyenDoiTrangThaiDichVuGame']);
Route::post('/api-chuyenDoiTrangThaiMini-miniGame-nro', [chuyenDoiController::class, 'chuyenDoiTrangThaiMiniGame']);
