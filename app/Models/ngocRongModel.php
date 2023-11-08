<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ngocRongModel extends Model
{
    use HasFactory;
    protected $table = 'ngoc_rong_models';

    protected $fillable = [
        'hinh_anh',
        'tieu_de',
        'so_tai_khoan',
        'gia_cu',
        'gia_moi',
        'tinh_trang',
    ];
}
