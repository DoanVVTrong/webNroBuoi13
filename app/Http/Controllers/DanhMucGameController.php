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

    public function layData(){
        $data = ngocRongModel::select('id','hinh_anh','tieu_de','gia_cu','gia_moi','so_tai_khoan')->get();
        return response()->json($data);
    }
}
