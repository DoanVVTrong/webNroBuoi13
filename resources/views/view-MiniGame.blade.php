@extends('pages.admin.masterpage')
@section('content')
    <div id="app">
        <div class="row">
            <div class="col-md-12">
                <form action="/add" method="post">
                    <div class="card text-dark border border-2 border-primary">
                        <div class="card-header">
                            <h5 class="text-danger" style="font-weight: bold">Thêm Danh Mục Game</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for=""><b>Hình ảnh</b></label>
                                    <div class="input-group mb-2 mt-2">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-image"></i></span>
                                        <input type="text" class="form-control shadow-none" placeholder="Nhập hình ảnh"
                                            aria-label="Username" aria-describedby="basic-addon1" v-model="list.hinh_anh">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Tiêu đề sản phẩm</b></label>
                                    <div class="input-group mb-2 mt-2">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-staff-snake"></i></span>
                                        <input type="text" class="form-control shadow-none" placeholder="Nhập tiêu đề"
                                            aria-label="Username" aria-describedby="basic-addon1" v-model="list.tieu_de">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Số lần quay</b></label>
                                    <div class="input-group mb-2 mt-2">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-bookmark"></i></span>
                                        <input type="text" class="form-control shadow-none" placeholder="Nhập lần quay"
                                            aria-label="Username" aria-describedby="basic-addon1"
                                            v-model="list.so_lan_quay">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Giá cũ</b></label>
                                    <div class="input-group mb-2 mt-2">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-money-bill"></i></span>
                                        <input type="text" class="form-control shadow-none" placeholder="Nhập giá cũ"
                                            aria-label="Username" aria-describedby="basic-addon1" v-model="list.gia_cu">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for=""><b>Giá hiện tại</b></label>
                                    <div class="input-group mb-2 mt-2">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-regular fa-money-bill-1"></i></span>
                                        <input type="text" class="form-control shadow-none"
                                            placeholder="Nhập giá hiện tại" aria-label="Username"
                                            aria-describedby="basic-addon1" v-model="list.gia_moi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Tình trạng</b></label>
                                    <select class="form-select form-control mt-2 mb-2" v-model="list.tinh_trang"
                                        aria-label="Large select example">
                                        <option selected disabled>Mặc định</option>
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Tạm tắt</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <div class="btn btn-primary" v-on:click=themData()>Thêm mới</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-danger" style="font-weight: bold">Quản lý Mini game </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center fs-6 align-middle text-dark"><b>#</b></th>
                                    <th class="text-center fs-6 align-middle text-dark" style="width: 13%"><b>Hình
                                            ảnh</b>
                                    </th>
                                    <th class="text-center fs-6 align-middle text-dark"><b>Tên sản phẩm</b></th>
                                    <th class="text-center fs-6 align-middle text-dark"><b>Số lần quay</b></th>
                                    <th class="text-center fs-6 align-middle text-dark"><b>Giá cũ</b></th>
                                    <th class="text-center fs-6 align-middle text-dark"><b>Giá hiện tại</b></th>
                                    <th class="text-center fs-6 align-middle text-dark"><b>Tình trạng</b></th>
                                    <th colspan="2" class="text-center fs-6 align-middle text-dark"><b>Action</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value,key) in list_mini_game">
                                    <tr>
                                        <th class="text-center align-middle">@{{ key + 1 }}</th>
                                        <td class="text-center align-middle"><img v-bind:src="value.hinh_anh"
                                                alt="" width="100%" class="img-thumbnail"></td>
                                        <td class="text-center align-middle" style="width: 200px; height: 80px;">
                                            @{{ value.tieu_de }}
                                        </td>
                                        <td class="text-center align-middle">@{{ value.so_lan_quay }}</td>
                                        <td class="text-center align-middle">@{{ value.gia_cu }}</td>
                                        <td class="text-center align-middle">@{{ value.gia_moi }}</td>
                                        <td class="text-center align-middle">
                                            <div class="btn btn-success" v-if="value.tinh_trang == 1"
                                                v-on:click="value.tinh_trang = 0 ">Hiển thị</div>
                                            <div class="btn btn-warning" v-if="value.tinh_trang == 0"
                                                v-on:click="value.tinh_trang = 1">Tạm tắt</div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div style="cursor: pointer;" class="hover-btn btn-opacity"><i
                                                    class="fa-solid fa-trash text-danger fs-4"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"></i></div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div style="cursor: pointer;" class="hover-btn btn-opacity"><i
                                                    class="fa-solid fa-pen-to-square text-primary fs-4"></i></div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal --}}
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xoá ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
    </div>
@endsection
@section('contentJS')
    <script>
        new Vue({
            el: '#app',

            data: {
                list_mini_game: [],
                list: {
                    'hinh_anh': '',
                    'tieu_de': '',
                    'so_lan_quay': '',
                    'gia_cu': '',
                    'gia_moi': '',
                    'tinh_trang': '',
                },
            },
            created() {
                // Sử dụng Promise.all để gửi các yêu cầu GET đồng thời
                axios
                    .get('http://127.0.0.1:8000/api/api-miniGame-nro')
                    .then((res) => {
                        this.list_mini_game = res.data;
                        console.log(res.data);
                    });


            },
            methods: {
                themData() {
                    axios
                        .post('http://127.0.0.1:8000/api/api-taoData-miniGame-nro', this.list)
                        .then((res) => {
                            this.list_mini_game = res.data;
                        })
                    this.list = {},
                    this.hienThiData();
                },
                xoaData(value) {
                    axios
                        .post('http://127.0.0.1:8000/api/api-xoaData-miniGame-nro', value)
                        .then((res) => {
                            this.list_mini_game = res.data;
                        })
                    this.hienThiData();
                },
                hienThiData() {
                    axios
                        .get('http://127.0.0.1:8000/api/api-miniGame-nro')
                        .then((res) => {
                            this.list_mini_game = res.data;
                            console.log(res.data);
                        });
                }
            },
        });
    </script>
@endsection
