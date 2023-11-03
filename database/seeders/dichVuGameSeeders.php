<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dichVuGameSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dich_vu_game_models')->delete();

        DB::table('dich_vu_game_models')->truncate();

        DB::table('dich_vu_game_models')->insert([
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-HONG-NGOC.gif',
                'tieu_de' => 'Mua Ngọc NRO',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-VANG-TU-DONG.gif',
                'tieu_de' => 'Mua Vàng NRO',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-SAN-THUE-DE-TU(1).gif',
                'tieu_de' => 'Làm Đệ - Săn Đệ NRO',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-HONG-NGOC.gif',
                'tieu_de' => 'Úp Sức Mạnh Đệ Tử NRO',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-XU-NINJA-SCHOOL.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-UP-BI-KIP-YARDRAT.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-UP-SM-DE-TU(1).gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-UP-SM-SU-PHU.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/D%E1%BB%8Bch%20v%E1%BB%A5/lam-thue-capsule-vang.jpg',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-XU-NINJA-SCHOOL.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-CAN-NGUYEN-GIA-RE.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-VU-NAP-UC-PUBG-MOBILE.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-VU-NAP-QUAN-HUY.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-VU-CAY-THUE-LIEN-QUAN.gif',
                'tieu_de' => 'Cày thuê Liên quân',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-VU-NAP-KIM-CUONG-FREE-FIRE.gif',
                'tieu_de' => 'Nạp Kim Cương Free Fire',
                'so_giao_dich' => 'Số tài khoản: 1623',
            ],

        ]);
    }
}

