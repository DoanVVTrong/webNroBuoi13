<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class minigameSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mini_game_models')->delete();

        DB::table('mini_game_models')->truncate();

        DB::table('mini_game_models')->insert([
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/minigame/%E1%BA%A2nh%20thumb/513.gif',
                'tieu_de' => 'Vòng Quay Ngọc Xanh Bò Mộng (Hot)',
                'so_lan_quay' => 'Đã quay: 13524',
                'gia_cu' => '12.000đ',
                'gia_moi' => '20.000đ'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/minigame/%E1%BA%A2nh%20thumb/512.gif',
                'tieu_de' => 'VQ Vàng Của Mèo Thần Tài (New)',
                'so_lan_quay' => 'Đã quay: 13524',
                'gia_cu' => '12.000đ',
                'gia_moi' => '20.000đ'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/minigame/%E1%BA%A2nh%20thumb/vong%20quay%20nick%20d%E1%BA%B7c%20bi%E1%BB%87t%20lien%20quan.gif',
                'tieu_de' => 'Vòng Quay Ngọc Xanh Bò Mộng (Hot)',
                'so_lan_quay' => 'Đã quay: 13524',
                'gia_cu' => '12.000đ',
                'gia_moi' => '20.000đ'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/minigame/%E1%BA%A2nh%20thumb/LAT-HINH-SKIN-SSS.gif',
                'tieu_de' => 'Lật Thẻ Skin SSS',
                'so_lan_quay' => 'Đã quay: 13524',
                'gia_cu' => '12.000đ',
                'gia_moi' => '20.000đ'
            ],
        ]);
    }
}
