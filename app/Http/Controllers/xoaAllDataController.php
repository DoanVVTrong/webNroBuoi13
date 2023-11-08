<?php

namespace App\Http\Controllers;

use App\Models\ngocRongModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class xoaAllDataController extends Controller
{
    public function xoaDataDanhMucGame(Request $request)
    {
        $data = ngocRongModel::select('id','hinh_anh','tieu_de','gia_cu','gia_moi','so_tai_khoan','tinh_trang')->get();
        dd($data);
    }

     public function addDataDanhMucGame(Request $request){

        // ngocRongModel::create([
        //     'hinh_anh' =>  $request->hinh_anh,
        //     'tieu_de' => $request->tieu_de,
        //     'so_lan_quay' => $request->so_lan_quay,
        //     'gia_cu' => $request->gia_cu,
        //     'gia_moi' => $request->gia_moi,
        //     'tinh_trang' => $request->tinh_trang,
        // ]);
     }
}
