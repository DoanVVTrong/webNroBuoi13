<?php

namespace App\Http\Controllers;
use App\Models\dichVuGameModel;
use Illuminate\Http\Request;

class dichVuGameController extends Controller
{
    public function layData(){
        $data = dichVuGameModel::select('id','hinh_anh','tieu_de','so_giao_dich')->get();
        return response()->json($data);
    }
}
