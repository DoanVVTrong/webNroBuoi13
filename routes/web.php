<?php

use App\Http\Controllers\DanhMucGameController;
use Illuminate\Support\Facades\Route;



Route::get('/',[DanhMucGameController::class,'index']);
