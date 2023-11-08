<?php

namespace App\Http\Controllers;

use App\Models\dichVuGameModel;
use App\Models\ngocRongModel;
use Illuminate\Http\Request;

class chuyenDoiController extends Controller
{
    public function chuyenDoiTrangThaiDanhMucGame(Request $request){

        $danhMucGame = ngocRongModel::where('id', $request->id)->first();

        if($danhMucGame){
           $danhMucGame->tinh_trang = !$danhMucGame->tinh_trang;
           $danhMucGame->save();
        }
    }
}
