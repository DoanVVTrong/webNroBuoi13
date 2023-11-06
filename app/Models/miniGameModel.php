<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miniGameModel extends Model
{
    use HasFactory;
    protected $table = 'mini_game_models';
     protected $fillable = [
        'hinh_anh',
        'tieu_de',
        'so_lan_quay',
        'gia_cu',
        'gia_moi',
        'tinh_trang'
        // Add all the missing fields here
    ];
}
