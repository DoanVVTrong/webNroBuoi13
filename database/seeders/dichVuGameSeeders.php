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
                'tieu_de' => 'Mua vàng Rồng Online',
                'so_giao_dich' => 'Số giao dịch: 1354'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-VANG-TU-DONG.gif',
                'tieu_de' => 'Săn Đệ NRO',
'so_giao_dich' => 'Số giao dịch: 1789'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-SAN-THUE-DE-TU(1).gif',
                'tieu_de' => 'Úp Tiềm Năng SM Ngọc Rồng',
                'so_giao_dich' => 'Số giao dịch: 1925'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-HONG-NGOC.gif',
                'tieu_de' => 'Nạp Gem Với Ưu Đãi Hấp Dẫn',
                'so_giao_dich' => 'Số giao dịch: 1432'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-XU-NINJA-SCHOOL.gif',
                'tieu_de' => 'Kỳ Nghỉ Halloween Rồng Online',
                'so_giao_dich' => 'Số giao dịch: 2047'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-UP-BI-KIP-YARDRAT.gif',
                'tieu_de' => 'Up Yardat NRO',
'so_giao_dich' => 'Số giao dịch: 2689'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-UP-SM-DE-TU(1).gif',
                'tieu_de' => 'Bộ Sưu Tập Đồ Vật Hiếm NRO',
                'so_giao_dich' => 'Số giao dịch: 1530'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-UP-SM-SU-PHU.gif',
                'tieu_de' => 'Làm Đạt Level Cao Nhất',
'so_giao_dich' => 'Số giao dịch: 1889'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/D%E1%BB%8Bch%20v%E1%BB%A5/lam-thue-capsule-vang.jpg',
                'tieu_de' => 'Sở Hữu Pet VIP Trong Game',
                'so_giao_dich' => 'Số giao dịch: 2076'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/DICH-VU-BAN-XU-NINJA-SCHOOL.gif',
                'tieu_de' => 'Vũ Khí Mạnh Mẽ Cho Nhân Vật',
                'so_giao_dich' => 'Số giao dịch: 2390'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-CAN-NGUYEN-GIA-RE.gif',
                'tieu_de' => 'Mua Skill Kiếm NRO',
                'so_giao_dich' => 'Số giao dịch: 1765'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-VU-NAP-UC-PUBG-MOBILE.gif',
                'tieu_de' => 'Đua Top Tháng Này',
'so_giao_dich' => 'Số giao dịch: 1950'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-VU-NAP-QUAN-HUY.gif',
                'tieu_de' => 'Nạp Gem - Nhận Quà Siêu Khủng',
'so_giao_dich' => 'Số giao dịch: 2134'
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-VU-CAY-THUE-LIEN-QUAN.gif',
                'tieu_de' => 'Cày thuê Liên quân',
                'so_giao_dich' => 'Số giao dịch: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/DICH-VU-NAP-KIM-CUONG-FREE-FIRE.gif',
                'tieu_de' => 'Nạp Kim Cương Free Fire',
                'so_giao_dich' => 'Số giao dịch: 1623',
            ],
        ]);
    }
}
