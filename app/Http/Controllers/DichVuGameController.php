<?php

namespace App\Http\Controllers;

use App\Models\dichVuGameModel;
use Illuminate\Http\Request;

class dichVuGameController extends Controller
{
    public function layData()
    {
        $data = dichVuGameModel::select('id', 'hinh_anh', 'tieu_de', 'so_giao_dich', 'tinh_trang')->get();
        return response()->json($data);
    }

    public function taoData(Request $request)
    {
        dichVuGameModel::create([
            'hinh_anh' => $request->hinh_anh,
            'tieu_de'  => $request->tieu_de,
            'so_giao_dich' => $request->so_giao_dich,
            'tinh_trang' => $request->tinh_trang,
        ]);
    }

    public function xoaData(Request $request)
    {
        // dd($request->all());
        dichVuGameModel::where('id', $request->id)->delete();
    }

    public function updateData(Request $request)
    {
        // dd($request->all());
        $dichVugame = dichVuGameModel::where('id', $request->id)->first();
        if ($dichVugame) {
            $dichVugame->hinh_anh  =  $request->hinh_anh;
            $dichVugame->tieu_de  =  $request->tieu_de;
            $dichVugame->so_giao_dich  =  $request->so_giao_dich;
            $dichVugame->tinh_trang  =  $request->tinh_trang;
        }
        $dichVugame->save();
    }
}
