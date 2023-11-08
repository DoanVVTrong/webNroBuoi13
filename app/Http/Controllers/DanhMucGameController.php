<?php

namespace App\Http\Controllers;

use App\Models\ngocRongModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\PaginationState;

class DanhMucGameController extends Controller
{

    public function index(){
        return view('index');
    }

    public function indexAdmin(){
        return view('view-admin');
    }
    public function indexDanhMucgame(){
        return view('view-DanhMuc');
    }
    public function indexDichVuGame(){
        return view('view-DichVu');
    }
    public function indexMiniGame(){
        return view('view-MiniGame');
    }

    public function indexContact(){
        return view('view-contact');
    }

    public function layData(){
        $data = ngocRongModel::select('id','hinh_anh','tieu_de','gia_cu','gia_moi','so_tai_khoan','tinh_trang')->get();
        return response()->json($data);
    }

    public function taoData(Request $request)
    {
        // dd($request->all());
        ngocRongModel::create([
            'hinh_anh' =>  $request->hinh_anh,
            'tieu_de' => $request->tieu_de,
            'so_tai_khoan' => $request->so_tai_khoan,
            'gia_cu' => $request->gia_cu,
            'gia_moi' => $request->gia_moi,
            'tinh_trang' => $request->tinh_trang,
        ]);
    }

    public function xoaData(Request $request)
    {
        ngocRongModel::where('id', $request->id)->delete();
    }

    public function updateData(Request $request)
    {
        $danhMucGame = ngocRongModel::where('id', $request->id)->first();
        if ($danhMucGame) {
            $danhMucGame->hinh_anh = $request->hinh_anh;
            $danhMucGame->tieu_de = $request->tieu_de;
            $danhMucGame->so_tai_khoan = $request->so_tai_khoan;
            $danhMucGame->gia_cu = $request->gia_cu;
            $danhMucGame->gia_moi = $request->gia_moi;
            $danhMucGame->tinh_trang = $request->tinh_trang;
        }
        $danhMucGame->save();
    }
}
