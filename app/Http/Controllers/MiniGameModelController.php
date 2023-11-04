<?php

namespace App\Http\Controllers;

use App\Models\miniGameModel;
use Illuminate\Http\Request;

class MiniGameModelController extends Controller
{
  public function layData(){
    $data = miniGameModel::select('id','tieu_de','hinh_anh','so_lan_quay','gia_cu','gia_moi')->get();
    return response()->json($data);
  }
}
