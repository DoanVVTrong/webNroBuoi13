@extends('pages.index.masterpage')
@section('content')
    <div id="app">
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="background-color: rgba(18, 17, 15, 0.858); padding: 12px;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row mx-auto">
                                    <div class="col-md-8 text-center xs-12"
                                        style="padding: 5px; ;background-color: rgba(18, 17, 15, 0.858); ">
                                        <a href=""
                                            style="text-decoration: none; font-weight: bold ;  color:rgb(255,80,46);">TOP
                                            NẠP THẺ THÁNG 8</a>
                                    </div>
                                    <div class="col-md-4 text-center" style="padding: 5px ;background-color: rgb(52,52,52)">
                                        <a href=""
                                            style="text-decoration: none; font-weight: bold ; color:white;">NẠP
                                            THẺ </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">

                                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true"
                                    space-between="30" centered-slides="true" autoplay-delay="1200"
                                    autoplay-disable-on-interaction="false">
                                    <swiper-slide>
                                        <a href="">
                                            <img style="object-fit: cover" src="/assets/slide4.gif" class="d-block w-100 carousel-image"
                                                alt="...">
                                        </a>
                                    </swiper-slide>
                                    <swiper-slide>
                                        <a href="">
                                            <img style="object-fit: cover" src="/assets/slide3.png" class="d-block w-100 carousel-image"
                                                alt="...">
                                        </a>
                                    </swiper-slide>
                                    <swiper-slide>
                                        <a href="">
                                            <img style="object-fit: cover" src="/assets/slide1.gif" class="d-block w-100 carousel-image"
                                                alt="...">
                                        </a>
                                    </swiper-slide>

                                </swiper-container>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            {{-- Dịch vụ nổi bât --}}
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="background-color: rgba(18, 17, 15, 0.858);">
                        <h2 class="text-center dichvu pt-3 pb-2" style="color:white; font-weight:bold;">DỊCH VỤ NỔI
                            BẬT</h2>
                        <div class="row py-5">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href=""> <img src="https://cdn.upanh.info/storage/upload/images/dich-vu.png"
                                        alt="" width="100%" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href=""> <img
                                        src="https://cdn.upanh.info/storage/upload/images/nick-ngoc-rong.png" alt=""
                                        width="100%" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-md-6 col-sm-6">
                                <a href=""> <img src="https://cdn.upanh.info/storage/upload/images/nap-the-cao.png"
                                        alt="" width="100%" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-md-6 col-sm-6">
                                <a href=""> <img src="https://cdn.upanh.info/storage/upload/images/nap-atm.png"
                                        alt="" width="100%" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            {{-- Danh mục game --}}
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="background-color: rgba(18, 17, 15, 0.858);">
                        <h2 class="text-center dichvu pt-3 pb-2" style="color:white; font-weight:bold;">DANH MỤC GAME</h2>
                        <div class="row py-4">
                            {{-- start --}}
                            <template v-for="(value , key) in list_danh_muc_game" v-if="value.tinh_trang == 1">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6  pb-4 d-flex">
                                    <div class="card flex-fill"
                                        style="width: 100%; background-color: rgba(18, 17, 15, 0.18); border: 1px solid white;">
                                        <a href=""><img v-bind:src="value.hinh_anh" class="card-img-top"
                                                alt="..."
                                                style=" object-fit: cover;
                                        height: 149px;"></a>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"
                                                style="text-transform: uppercase; font-weight: bold ;font-size: 14px ;color:rgb(241,196,15);">
                                                @{{ value.tieu_de }}</h5>
                                            <p class="card-text text-center" style=" font-size: 13px ;color:#fff;">
                                                @{{ value.so_tai_khoan }}</p>
                                            <div class="price">
                                                <div class="row text-center d-flex justify-content-center">
                                                    <div class="col-md-5">
                                                        <div class=" old-price py-1 mb-sm-2 mb-xs-2"
                                                            style="color:rgb(51,255,0); border: 2px solid rgb(51,255,0); border-radius: 5px ; font-weight: bold; font-size: 14px ;">
                                                            @{{ value.gia_cu }}</div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="current-price py-1 "
                                                            style="color:rgb(255,0,0); border: 2px solid rgb(255,0,0);  border-radius: 5px ;font-weight: bold; font-size: 14px ;">
                                                            @{{ value.gia_moi }}</div>
                                                    </div>
                                                </div>


                                            </div>
                                            <a href="#" class="d-flex justify-content-center pt-4 pb-1">
                                                <img src="https://cdn.upanh.info/storage/upload/acc-category-shopngocrongnet/29/images/muangay.jpg"
                                                    alt="" width="70%" class="muangay">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            {{-- end --}}
                        </div>

                    </div>

                    <div class="col-md-1">

                    </div>

                </div>

            </div>

            {{-- Dịch vụ game  --}}
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="background-color: rgba(18, 17, 15, 0.858);">
                        <h2 class="text-center dichvu pt-3 pb-2" style="color:white; font-weight:bold;">DỊCH VỤ GAME</h2>
                        <div class="row py-4">
                            {{-- start --}}
                            <template v-for="(value,key) in list_dich_vu_game"  v-if="value.tinh_trang == 1">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6  pb-4 d-flex ">
                                    <div class="card"
                                        style="width: 100%; background-color: rgba(18, 17, 15, 0.18); border: 1px solid white">
                                        <a href=""><img v-bind:src="value.hinh_anh" class="card-img-top"
                                                alt="..."
                                                style=" object-fit: cover;
                                            height: 149px;"></a>
                                        <div class="card-body">
                                            <h5 class="card-title text-center  text-container"
                                                style="text-transform: uppercase; font-weight: bold ;font-size: 14px ;color:rgb(241,196,15);">
                                                @{{ value.tieu_de }}</h5>
                                            <p class="card-text text-center" style=" font-size: 13px ;color:#fff;">
                                                @{{ value.so_giao_dich }}</p>
                                            <a href="#" class="d-flex justify-content-center pt-4 pb-1">
                                                <img src="https://cdn.upanh.info/storage/upload/acc-category-shopngocrongnet/29/images/muangay.jpg"
                                                    alt="" width="70%" class="muangay">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            {{-- end --}}
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>

            {{-- Danh mục game --}}
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="background-color: rgba(18, 17, 15, 0.858);">
                        <h2 class="text-center dichvu pt-3 pb-2" style="color:white; font-weight:bold;">MINI GAME</h2>
                        <div class="row py-4">
                            {{-- start --}}
                            <template v-for="(value , key) in list_mini_game" v-if="value.tinh_trang == 1">
                                <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-xs-6  pb-4 d-flex">
                                    <div class="card flex-fill"
                                        style="width: 100%; background-color: rgba(18, 17, 15, 0.18); border: 1px solid white;">
                                        <a href=""><img v-bind:src="value.hinh_anh" class="card-img-top"
                                                alt="..."
                                                style=" object-fit: cover;
                                        height: 149px;"></a>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"
                                                style="text-transform: uppercase; font-weight: bold ;font-size: 14px ;color:rgb(241,196,15); height: 30px;">
                                                @{{ value.tieu_de }}</h5>
                                            <p class="card-text text-center" style=" font-size: 13px ;color:#fff;">
                                                @{{ value.so_lan_quay }}</p>
                                            <div class="price">
                                                <div class="row text-center d-flex justify-content-center">
                                                    <div class="col-md-5">
                                                        <div class=" old-price py-1 mb-sm-2 mb-xs-2"
                                                            style="color:rgb(51,255,0); border: 2px solid rgb(51,255,0); border-radius: 5px ; font-weight: bold; font-size: 14px ;">
                                                            @{{ value.gia_cu }}</div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="current-price py-1 "
                                                            style="color:rgb(255,0,0); border: 2px solid rgb(255,0,0);  border-radius: 5px ;font-weight: bold; font-size: 14px ;">
                                                            @{{ value.gia_moi }}</div>
                                                    </div>
                                                </div>


                                            </div>
                                            <a href="#" class="d-flex justify-content-center pt-4 pb-1">
                                                <img src="https://cdn.upanh.info/storage/upload/acc-category-shopngocrongnet/29/images/muangay.jpg"
                                                    alt="" width="70%" class="muangay">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            {{-- end --}}
                        </div>

                    </div>

                    <div class="col-md-1">

                    </div>

                </div>

            </div>

            <div class="container pt-4 ">
                <div class="row">
                    <div class="col-md-1"></div>
                    <h5 class="col-md-10 text-end py-4" style="background-color: rgba(18, 17, 15, 0.858);">
                        <a href=""
                            style="text-decoration: none ; font-weight: bold ;color:rgb(241,196,15); font-size: 16px ">Xem
                            tất
                            cả »</a>
                    </h5>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('contentJS')
    <script>
        new Vue({
            el: '#app',
            data: {
                list_danh_muc_game: [],
                list_dich_vu_game: [],
                list_mini_game: [],
            },
            created() {
                // Sử dụng Promise.all để gửi các yêu cầu GET đồng thời
                axios
                    .get('/api/api-danhMucGame-nro')
                    .then((res) => {
                        this.list_danh_muc_game = res.data;
                        // console.log(res.data);
                    }),
                    axios
                    .get('/api/api-dichVuGame-nro')
                    .then((res) => {
                        this.list_dich_vu_game = res.data;
                        // console.log(res.data);
                    }),
                    axios
                    .get('/api/api-miniGame-nro')
                    .then((res) => {
                        this.list_mini_game = res.data;
                        console.log(res.data);
                    })
            },
            methods: {},
        });
    </script>
@endsection
