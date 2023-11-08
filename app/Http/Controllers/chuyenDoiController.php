<?php

namespace App\Http\Controllers;

use App\Models\dichVuGameModel;
use App\Models\miniGameModel;
use App\Models\ngocRongModel;
use Illuminate\Http\Request;

class chuyenDoiController extends Controller
{
    public function chuyenDoiTrangThaiDanhMucGame(Request $request)
    {
        $danhMucGame = ngocRongModel::where('id', $request->id)->first();

        if ($danhMucGame) {
            $danhMucGame->tinh_trang = !$danhMucGame->tinh_trang;
            $danhMucGame->save();
        }
    }

    public function chuyenDoiTrangThaiDichVuGame(Request $request)
    {
        // dd($request->all());
        $dichVuGame = dichVuGameModel::where('id', $request->id)->first();

        if ($dichVuGame) {
            $dichVuGame->tinh_trang = $request->tinh_trang;
            $dichVuGame->save();
        }
    }
    public function chuyenDoiTrangThaiMiniGame(Request $request)
    {
        // dd($request->all());
        $miniGame = miniGameModel::where('id', $request->id)->first();

        if ($miniGame) {
            $miniGame->tinh_trang = $request->tinh_trang;
            $miniGame->save();
        }
    }
}
