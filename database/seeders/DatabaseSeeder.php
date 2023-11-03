<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('ngoc_rong_models')->delete();

        DB::table('ngoc_rong_models')->truncate();

        DB::table('ngoc_rong_models')->insert([
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-NGOC-RONG-ONLINE.gif?t=1669692922',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/THUMBNAIL-BAN-NICK-SS-CO-DE-TU.gif?t=1668760668',
                'tieu_de' => 'Nick NRO Sơ Sinh Có Đệ Tử',
                'gia_cu' => '21.500 đ',
                'gia_moi' => '15.750 đ',
                'so_tai_khoan' => 'Số tài khoản: 772',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/THU-VAN-MAY-NGOC-RONG-VIP-1.gif?t=1668760512',
                'tieu_de' => 'Thử Vận May Ngọc Rồng Vip 1',
                'gia_cu' => '18.750 đ',
                'gia_moi' => '14.200 đ',
                'so_tai_khoan' => 'Số tài khoản: 0',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/THU-VAN-MAY-NGOC-RONG-VIP-3-GIF.gif?t=1668760566',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '33.800 đ',
                'gia_moi' => '28.600 đ',
                'so_tai_khoan' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/MUA-NICK-FF-SIEU-RE.gif?t=1668760300',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '19.900 đ',
                'gia_moi' => '16.300 đ',
                'so_tai_khoan' => 'Số tài khoản: 1623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-NINJA-SCHOOL-ONLINE.gif?t=1668760650',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '35.000 đ',
                'gia_moi' => '27.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 1223',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/THUMBNAIL-BAN-NICK-SS-CO-DE-TU.gif?t=1668760668',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '60.000 đ',
                'gia_moi' => '50.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 112',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/THU-VAN-MAY-NGOC-RONG-VIP-2.gif?t=1668760541',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 16',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/THU-VAN-MAY-NGOC-RONG-VIP-3-GIF.gif?t=1668760566',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 21232',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-NINJA-SCHOOL-ONLINE.gif?t=1668760650',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 9623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/MUA-NICK-FF-SIEU-RE.gif?t=1668760300',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 623',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/Danh%20M%E1%BB%A5c%20-%20Q.ly%20Nick/DM%20-%20Nick%20Li%C3%AAn%20Qu%C3%A2n/Xa-kho-nick-Lien-Quan.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/acc-category-shopngocrongnet/60/images/RANDOM-LQ-VIP-1.gif',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-2.gif?t=1668054895',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-3.gif?t=1668054901',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
            ],
        ]);
    }
}
