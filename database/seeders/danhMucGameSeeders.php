<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class danhMucGameSeeders extends Seeder
{
    /**
     * Run the database seeds.
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
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/THUMBNAIL-BAN-NICK-SS-CO-DE-TU.gif?t=1668760668',
                'tieu_de' => 'Nick NRO Sơ Sinh Có Đệ Tử',
                'gia_cu' => '21.500 đ',
                'gia_moi' => '15.750 đ',
                'so_tai_khoan' => 'Số tài khoản: 772',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/THU-VAN-MAY-NGOC-RONG-VIP-1.gif?t=1668760512',
                'tieu_de' => 'Thử Vận May Ngọc Rồng Vip 1',
                'gia_cu' => '18.750 đ',
                'gia_moi' => '14.200 đ',
                'so_tai_khoan' => 'Số tài khoản: 0',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/THU-VAN-MAY-NGOC-RONG-VIP-3-GIF.gif?t=1668760566',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '33.800 đ',
                'gia_moi' => '28.600 đ',
                'so_tai_khoan' => 'Số tài khoản: 1623',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/MUA-NICK-FF-SIEU-RE.gif?t=1668760300',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '19.900 đ',
                'gia_moi' => '16.300 đ',
                'so_tai_khoan' => 'Số tài khoản: 1623',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-NINJA-SCHOOL-ONLINE.gif?t=1668760650',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '35.000 đ',
                'gia_moi' => '27.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 1223',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/THUMBNAIL-BAN-NICK-SS-CO-DE-TU.gif?t=1668760668',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '60.000 đ',
                'gia_moi' => '50.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 112',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/THU-VAN-MAY-NGOC-RONG-VIP-2.gif?t=1668760541',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 16',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/THU-VAN-MAY-NGOC-RONG-VIP-3-GIF.gif?t=1668760566',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 21232',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-NINJA-SCHOOL-ONLINE.gif?t=1668760650',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 9623',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/MUA-NICK-FF-SIEU-RE.gif?t=1668760300',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 623',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/Danh%20M%E1%BB%A5c%20-%20Q.ly%20Nick/DM%20-%20Nick%20Li%C3%AAn%20Qu%C3%A2n/Xa-kho-nick-Lien-Quan.gif',
                'tieu_de' => 'Bảo Bối NRO - Đẳng Cấp Thần Rồng',
                'gia_cu' => '25.000 đ',
                'gia_moi' => '15.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 456',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/acc-category-shopngocrongnet/60/images/RANDOM-LQ-VIP-1.gif',
                'tieu_de' => 'Tinh Anh NRO - Huyền Thoại Rồng Lửa',
                'gia_cu' => '18.000 đ',
                'gia_moi' => '11.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 789',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-2.gif?t=1668054895',
                'tieu_de' => 'Vũ Khí NRO - Long Thần Sơn Hải',
                'gia_cu' => '22.000 đ',
                'gia_moi' => '13.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 246',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-3.gif?t=1668054901',
                'tieu_de' => 'Thần Phong NRO - Bí Ẩn Vùng Đất Rồng',
                'gia_cu' => '19.000 đ',
                'gia_moi' => '10.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 159',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-TOC-CHIEN.gif?t=1668760734',
                'tieu_de' => 'Linh Thú NRO - Cuộc Phiêu Lưu Rồng Đỏ',
                'gia_cu' => '21.000 đ',
                'gia_moi' => '12.500 đ',
                'so_tai_khoan' => 'Số tài khoản: 357',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/MUA-NICK-PUBG-MOBILE.gif?t=1668760713',
                'tieu_de' => 'Thần Công NRO - Đỉnh Cao Uy Lực Rồng Thiêng',
                'gia_cu' => '23.000 đ',
                'gia_moi' => '14.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 802',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Hộp Quà NRO - Bí Mật Rồng Huyền Bí',
                'gia_cu' => '20.500 đ',
                'gia_moi' => '12.300 đ',
                'so_tai_khoan' => 'Số tài khoản: 634',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Phù Thủy NRO - Kỹ Năng Phép Thuật Rồng',
                'gia_cu' => '24.000 đ',
                'gia_moi' => '14.500 đ',
                'so_tai_khoan' => 'Số tài khoản: 931',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Linh Hồn NRO - Bước Chân Rồng Huyền Thoại',
                'gia_cu' => '17.000 đ',
                'gia_moi' => '10.500 đ',
                'so_tai_khoan' => 'Số tài khoản: 742',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Chiến Binh NRO - Cuộc Chiến Rồng Khốc Liệt',
                'gia_cu' => '26.000 đ',
                'gia_moi' => '16.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 578',
                'tinh_trang' => 1,
            ],
            [
                'hinh_anh' => 'https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif?t=1668760332',
                'tieu_de' => 'Nick NRO - Ngọc Rồng Online',
                'gia_cu' => '20.000 đ',
                'gia_moi' => '12.000 đ',
                'so_tai_khoan' => 'Số tài khoản: 123',
                'tinh_trang' => 1,
            ],
        ]);
    }
}
