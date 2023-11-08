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

        DB::table('ngoc_rong_models')->insert(
            [
                // start
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-TOC-CHIEN.gif",
                    "tieu_de" => "Bán Nick Tốc Chiến",
                    "gia_cu" => "855.212 đ",
                    "gia_moi" => "4.830 đ",
                    "so_tai_khoan" => "Số tài khoản: 313",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-2.gif",
                    "tieu_de" => "Thử Vận May Liên Quân Vip",
                    "gia_cu" => "942.574 đ",
                    "gia_moi" => "3.720 đ",
                    "so_tai_khoan" => "Số tài khoản: 410",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/lq.gif",
                    "tieu_de" => "Nick Liên Quân",
                    "gia_cu" => "98.800 đ",
                    "gia_moi" => "8.240 đ",
                    "so_tai_khoan" => "Số tài khoản: 8904",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/ff.jpg",
                    "tieu_de" => "Random Ninja School 2",
                    "gia_cu" => "760.390 đ",
                    "gia_moi" => "4.211 đ",
                    "so_tai_khoan" => "Số tài khoản: 1977",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/ACC-RABDIN-BLOX-FRUIT-200K.gif",
                    "tieu_de" => "Random Blox Fruit 200k",
                    "gia_cu" => "499.976 đ",
                    "gia_moi" => "4.407 đ",
                    "so_tai_khoan" => "Số tài khoản: 8651",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/MUA-NNICK-LIEN-QUAN-REG.gif",
                    "tieu_de" => "NICK LIÊN QUÂN REG",
                    "gia_cu" => "424.794 đ",
                    "gia_moi" => "9.014 đ",
                    "so_tai_khoan" => "Số tài khoản: 6137",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/KHO-NICK-NINJA-SCHOOL-CLONE.gif",
                    "tieu_de" => "Random Ninja School 5k",
                    "gia_cu" => "967.491 đ",
                    "gia_moi" => "3.344 đ",
                    "so_tai_khoan" => "Số tài khoản: 6619",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/ACC-MAX-ROBLOX-LEOPAD.gif",
                    "tieu_de" => "Acc Leopard Max Level",
                    "gia_cu" => "127.057 đ",
                    "gia_moi" => "4.808 đ",
                    "so_tai_khoan" => "Số tài khoản: 2726",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/MUA-NICK-LIEN-QUAN-SALE.gif",
                    "tieu_de" => "Nick Liên Quân Sale",
                    "gia_cu" => "926.207 đ",
                    "gia_moi" => "9.625 đ",
                    "so_tai_khoan" => "Số tài khoản: 8407",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/ACC-MAX-LV-ROBLOX-MOCHI-V2.gif",
                    "tieu_de" => "Acc Mochi V2 Max Level",
                    "gia_cu" => "61.072 đ",
                    "gia_moi" => "517 đ",
                    "so_tai_khoan" => "Số tài khoản: 9768",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/MUA-NICK-LIEN-QUAN-VIP.gif",
                    "tieu_de" => "Nick Liên Quân Vip",
                    "gia_cu" => "336.517 đ",
                    "gia_moi" => "7.670 đ",
                    "so_tai_khoan" => "Số tài khoản: 4446",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/ACC-BLOXFRUIT-RACE-V4-FULL-GEAR.gif",
                    "tieu_de" => "Acc Blox Fruit Race V4",
                    "gia_cu" => "876.960 đ",
                    "gia_moi" => "435 đ",
                    "so_tai_khoan" => "Số tài khoản: 9458",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/THU-VAM-MAY-TRUNG-ACC-VIP.gif",
                    "tieu_de" => "Thử vận may nick Grand",
                    "gia_cu" => "82.328 đ",
                    "gia_moi" => "8.040 đ",
                    "so_tai_khoan" => "Số tài khoản: 4532",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/THU-VAN-MAY-KINGPICE.gif",
                    "tieu_de" => "Thử vận may nick King",
                    "gia_cu" => "51.296 đ",
                    "gia_moi" => "6.580 đ",
                    "so_tai_khoan" => "Số tài khoản: 3007",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Shop%20ADS/n6Nk9g2iV4_1668061505.gif",
                    "tieu_de" => "RANDOM LIÊN QUÂN 9K",
                    "gia_cu" => "727.991 đ",
                    "gia_moi" => "6.666 đ",
                    "so_tai_khoan" => "Số tài khoản: 5325",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-1.gif",
                    "tieu_de" => "Thử Vận May Liên Quân Vip",
                    "gia_cu" => "942.024 đ",
                    "gia_moi" => "8.764 đ",
                    "so_tai_khoan" => "Số tài khoản: 1450",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-3.gif",
                    "tieu_de" => "Thử Vận May Liên Quân Vip",
                    "gia_cu" => "306.638 đ",
                    "gia_moi" => "3.349 đ",
                    "so_tai_khoan" => "Số tài khoản: 9531",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/KHO-NICK-NINJA-SCHOOL-DONG-GIA.gif",
                    "tieu_de" => "Random Ninja School",
                    "gia_cu" => "158.225 đ",
                    "gia_moi" => "1.512 đ",
                    "so_tai_khoan" => "Số tài khoản: 5236",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-4.gif",
                    "tieu_de" => "Thử Vận May Liên Quân Vip",
                    "gia_cu" => "893.715 đ",
                    "gia_moi" => "9.667 đ",
                    "so_tai_khoan" => "Số tài khoản: 7843",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-5.gif",
                    "tieu_de" => "Thử Vận May Liên Quân Vip",
                    "gia_cu" => "340.313 đ",
                    "gia_moi" => "785 đ",
                    "so_tai_khoan" => "Số tài khoản: 9327",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-LQ-VIP-6.gif",
                    "tieu_de" => "Thử Vận May Liên Quân Vip",
                    "gia_cu" => "744.561 đ",
                    "gia_moi" => "2.509 đ",
                    "so_tai_khoan" => "Số tài khoản: 4368",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif",
                    "tieu_de" => "Nick Liên Minh",
                    "gia_cu" => "807.316 đ",
                    "gia_moi" => "3.909 đ",
                    "so_tai_khoan" => "Số tài khoản: 408",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/BAN-NICK-LIEN-MINH-HUYEN-THOAI.gif",
                    "tieu_de" => "Nick Liên Minh 1k/1 Skin",
                    "gia_cu" => "213.166 đ",
                    "gia_moi" => "7.473 đ",
                    "so_tai_khoan" => "Số tài khoản: 9",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/RANDOM-LIEN-MINH-VIP-1.gif",
                    "tieu_de" => "Random Liên Minh Vip 1",
                    "gia_cu" => "850.232 đ",
                    "gia_moi" => "6.331 đ",
                    "so_tai_khoan" => "Số tài khoản: 5775",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/RANDOM-LIEN-MINH-VIP-2.gif",
                    "tieu_de" => "Random Liên Minh Vip 2",
                    "gia_cu" => "438.846 đ",
                    "gia_moi" => "9.564 đ",
                    "so_tai_khoan" => "Số tài khoản: 8526",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/RANDOM-LIEN-MINH-VIP-3.gif",
                    "tieu_de" => "Random Liên Minh Vip 3",
                    "gia_cu" => "291.059 đ",
                    "gia_moi" => "8.630 đ",
                    "so_tai_khoan" => "Số tài khoản: 4769",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/RANDOM-LIEN-MINH-VIP-4.gif",
                    "tieu_de" => "Random Liên Minh Vip 4",
                    "gia_cu" => "946.077 đ",
                    "gia_moi" => "7.110 đ",
                    "so_tai_khoan" => "Số tài khoản: 453",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/RANDOM-LIEN-MINH-VIP-5.gif",
                    "tieu_de" => "Random Liên Minh Vip 5",
                    "gia_cu" => "256.160 đ",
                    "gia_moi" => "788 đ",
                    "so_tai_khoan" => "Số tài khoản: 7446",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/THU-VAN-MAY-LIEN-MINH-VIP-6-GIF.gif",
                    "tieu_de" => "Random Liên Minh Vip 6",
                    "gia_cu" => "774.844 đ",
                    "gia_moi" => "2.519 đ",
                    "so_tai_khoan" => "Số tài khoản: 6532",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Danh%20M%E1%BB%A5c%20-%20Q.ly%20Nick/DM%20-%20Nick%20FiFa/RANDOM-FIFA-04-VIP-1.gif",
                    "tieu_de" => "RANDOM FIFA VIP 1",
                    "gia_cu" => "338.064 đ",
                    "gia_moi" => "4.212 đ",
                    "so_tai_khoan" => "Số tài khoản: 2557",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Danh%20M%E1%BB%A5c%20-%20Q.ly%20Nick/DM%20-%20Nick%20FiFa/RANDOM-FIFA-04-VIP-2.gif",
                    "tieu_de" => "RANDOM FIFA VIP 2",
                    "gia_cu" => "23.432 đ",
                    "gia_moi" => "8.938 đ",
                    "so_tai_khoan" => "Số tài khoản: 9242",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/ACC-RANDOM-BLOX-FRUIT-120K.gif",
                    "tieu_de" => "Random Blox Fruit 120k",
                    "gia_cu" => "21.810 đ",
                    "gia_moi" => "3.958 đ",
                    "so_tai_khoan" => "Số tài khoản: 7738",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Shop%20ADS/ff%201%2C2%2C3%2C4.gif",
                    "tieu_de" => "RANDOM FREE FIRE 17K",
                    "gia_cu" => "127.370 đ",
                    "gia_moi" => "7.211 đ",
                    "so_tai_khoan" => "Số tài khoản: 8150",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/7iOrQTsWpT_1623164498.gif",
                    "tieu_de" => "Nick Zing Speed",
                    "gia_cu" => "530.789 đ",
                    "gia_moi" => "2.474 đ",
                    "so_tai_khoan" => "Số tài khoản: 2364",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20v%C3%B2ng%20thum/BAN-ITEM-DO-NGOC-RONG.gif",
                    "tieu_de" => "Bán Đồ Ngọc Rồng",
                    "gia_cu" => "517.747 đ",
                    "gia_moi" => "3.409 đ",
                    "so_tai_khoan" => "Số tài khoản: 7444",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/MUA-NICK-PUBG-MOBILE.gif",
                    "tieu_de" => "Bán Nick PUBG Mobile",
                    "gia_cu" => "650.256 đ",
                    "gia_moi" => "2.923 đ",
                    "so_tai_khoan" => "Số tài khoản: 3945",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/MUA-NICK-GENSHIN-VIP.gif",
                    "tieu_de" => "Acc Genshin Vip",
                    "gia_cu" => "490.152 đ",
                    "gia_moi" => "1.218 đ",
                    "so_tai_khoan" => "Số tài khoản: 5557",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/MUA-GENSHIN-KHOI-DAU(1).gif",
                    "tieu_de" => "Acc Genshin Khởi Đầu",
                    "gia_cu" => "888.417 đ",
                    "gia_moi" => "4.085 đ",
                    "so_tai_khoan" => "Số tài khoản: 6688",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/MUA-GENSHIN-REROLL.gif",
                    "tieu_de" => "Acc Genshin Reroll",
                    "gia_cu" => "355.534 đ",
                    "gia_moi" => "2.116 đ",
                    "so_tai_khoan" => "Số tài khoản: 4405",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/RANDOM-GENSHIN-VIP-1.gif",
                    "tieu_de" => "Random Genshin Vip 1",
                    "gia_cu" => "905.607 đ",
                    "gia_moi" => "6.393 đ",
                    "so_tai_khoan" => "Số tài khoản: 9636",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/RANDOM-GENSHIN-VIP-2.gif",
                    "tieu_de" => "Random Genshin Vip 2",
                    "gia_cu" => "395.962 đ",
                    "gia_moi" => "2.829 đ",
                    "so_tai_khoan" => "Số tài khoản: 2471",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/MUA-NICK-FF-SIEU-RE.gif",
                    "tieu_de" => "Nick Free Fire",
                    "gia_cu" => "704.425 đ",
                    "gia_moi" => "6.549 đ",
                    "so_tai_khoan" => "Số tài khoản: 451",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Logo%20shop/MUA-NICK-DOT-KICH-GIA-RE.gif",
                    "tieu_de" => "Nick Đột Kích",
                    "gia_cu" => "973.934 đ",
                    "gia_moi" => "8.511 đ",
                    "so_tai_khoan" => "Số tài khoản: 4876",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/BAN-NICK-NGOC-RONG-ONLINE.gif",
                    "tieu_de" => "Nick Ngọc Rồng Online",
                    "gia_cu" => "253.505 đ",
                    "gia_moi" => "7.850 đ",
                    "so_tai_khoan" => "Số tài khoản: 792",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/Thumb%20T%E1%BA%BFt%20-%20v1/MUA-NICK-FF-SALE.gif",
                    "tieu_de" => "Nick Free Fire Sale",
                    "gia_cu" => "6.108 đ",
                    "gia_moi" => "3.675 đ",
                    "so_tai_khoan" => "Số tài khoản: 8697",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/RANDOM-DOT-KICH-VIP-1.gif",
                    "tieu_de" => "Random CF Vip 1",
                    "gia_cu" => "572.506 đ",
                    "gia_moi" => "8.200 đ",
                    "so_tai_khoan" => "Số tài khoản: 7144",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/THUMBNAIL-BAN-NICK-SS-CO-DE-TU.gif",
                    "tieu_de" => "Nick Sơ Sinh Có Đệ Tử",
                    "gia_cu" => "532.958 đ",
                    "gia_moi" => "4.924 đ",
                    "so_tai_khoan" => "Số tài khoản: 2814",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/Thumb%20t%E1%BA%BFt%20-%20V2/MUA-NICK-FREE-FIRE-VIP.gif",
                    "tieu_de" => "Nick Free Fire Vip",
                    "gia_cu" => "234.704 đ",
                    "gia_moi" => "214 đ",
                    "so_tai_khoan" => "Số tài khoản: 8387",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-DOT-KICH-VIP-2.gif",
                    "tieu_de" => "Random CF Vip 2",
                    "gia_cu" => "688.917 đ",
                    "gia_moi" => "7.702 đ",
                    "so_tai_khoan" => "Số tài khoản: 9831",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/THU-VAN-MAY-DOT-KICH-VIP-3%20(1).gif",
                    "tieu_de" => "Random CF Vip 3",
                    "gia_cu" => "183.875 đ",
                    "gia_moi" => "7.249 đ",
                    "so_tai_khoan" => "Số tài khoản: 674",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Ảnh%20Thumb%20Web/ACC-RANDOM-BLOX-FRUIT-50K.gif",
                    "tieu_de" => "Random Blox Fruit 50k",
                    "gia_cu" => "325.496 đ",
                    "gia_moi" => "9.792 đ",
                    "so_tai_khoan" => "Số tài khoản: 3040",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20v%C3%B2ng%20thum/BAN-NICK-NGOC-RONG-BLUE.gif",
                    "tieu_de" => "Bán Nick Nro Lậu",
                    "gia_cu" => "765.260 đ",
                    "gia_moi" => "8.217 đ",
                    "so_tai_khoan" => "Số tài khoản: 3453",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-FF-VIP-4.gif",
                    "tieu_de" => "Thử Vận May Free Fire Vip",
                    "gia_cu" => "571.210 đ",
                    "gia_moi" => "2.370 đ",
                    "so_tai_khoan" => "Số tài khoản: 8056",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-TAI-KHOẢN-QCMM.gif",
                    "tieu_de" => "Tài Khoản Random QCMM",
                    "gia_cu" => "710.442 đ",
                    "gia_moi" => "5.633 đ",
                    "so_tai_khoan" => "Số tài khoản: 8419",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/THU-VAN-MAY-NGOC-RONG-VIP-1.gif",
                    "tieu_de" => "Thử Vận May Ngọc Rồng Vip",
                    "gia_cu" => "846.005 đ",
                    "gia_moi" => "3.208 đ",
                    "so_tai_khoan" => "Số tài khoản: 2645",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-FF-VIP-2.gif",
                    "tieu_de" => "Thử Vận May Free Fire Vip",
                    "gia_cu" => "89.236 đ",
                    "gia_moi" => "9.584 đ",
                    "so_tai_khoan" => "Số tài khoản: 800",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/THU-VAN-MAY-NGOC-RONG-VIP-2.gif",
                    "tieu_de" => "Thử Vận May Ngọc Rồng Vip",
                    "gia_cu" => "543.137 đ",
                    "gia_moi" => "5.279 đ",
                    "so_tai_khoan" => "Số tài khoản: 1882",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/BAN-ACC-ROBLOX-GIA-RE.gif",
                    "tieu_de" => "Bán Acc Roblox",
                    "gia_cu" => "937.066 đ",
                    "gia_moi" => "175 đ",
                    "so_tai_khoan" => "Số tài khoản: 3417",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-FF-VIP-3.gif",
                    "tieu_de" => "Thử Vận May Free Fire Vip",
                    "gia_cu" => "429.030 đ",
                    "gia_moi" => "6.219 đ",
                    "so_tai_khoan" => "Số tài khoản: 8253",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-FF-VIP-4.gif",
                    "tieu_de" => "Thử Vận May Ngọc Rồng Vip",
                    "gia_cu" => "360.325 đ",
                    "gia_moi" => "8.283 đ",
                    "so_tai_khoan" => "Số tài khoản: 5948",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/RANDOM-FF-VIP-2.gif",
                    "tieu_de" => "Thử Vận May Free Fire Vip",
                    "gia_cu" => "827.236 đ",
                    "gia_moi" => "9.199 đ",
                    "so_tai_khoan" => "Số tài khoản: 9290",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/BAN-NICK-NINJA-SCHOOL-ONLINE.gif",
                    "tieu_de" => "Nick Ninja School",
                    "gia_cu" => "545.430 đ",
                    "gia_moi" => "7.729 đ",
                    "so_tai_khoan" => "Số tài khoản: 1067",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/ACC-RANDOM-BLOX-FRUIT-20K.gif",
                    "tieu_de" => "Random Blox Fruit 20k",
                    "gia_cu" => "817.493 đ",
                    "gia_moi" => "4.122 đ",
                    "so_tai_khoan" => "Số tài khoản: 2828",
                    "tinh_trang" => 1
                ],
                [
                    "hinh_anh" => "https://cdn.upanh.info/storage/upload/images/Shop%20ADS/n6Nk9g2iV4_1668061505.gif",
                    "tieu_de" => "RANDOM LIÊN QUÂN 9K",
                    "gia_cu" => "727.991 đ",
                    "gia_moi" => "6.666 đ",
                    "so_tai_khoan" => "Số tài khoản: 5325",
                    "tinh_trang" => 1
                ],
            ]

            // end
        );
    }
}
