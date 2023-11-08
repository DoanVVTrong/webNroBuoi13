<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dichVuGameModel extends Model
{
    use HasFactory;
    protected $table = 'dich_vu_game_models';

    protected $fillable = [
        'hinh_anh',
        'tieu_de' ,
        'so_giao_dich',
        'tinh_trang',
    ];
}
