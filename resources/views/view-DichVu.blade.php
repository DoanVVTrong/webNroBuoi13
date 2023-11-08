@extends('pages.admin.masterpage')
@section('content')
    <div id="app">
        <div class="row">
            <div class="col-md-4">
                <form action="/add" method="post">
                    <div class="card text-dark border border-2 border-primary">
                        <div class="card-header">
                            <h5 class="text-danger" style="font-weight: bold">Thêm Dịch Vụ Game</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for=""><b>Hình ảnh</b></label>
                                <div class="input-group mb-2 mt-2">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-image"></i></span>
                                    <input type="text" class="form-control shadow-none" placeholder="Nhập hình ảnh"
                                        v-model = "list.hinh_anh" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <label for=""><b>Tiêu đề sản phẩm</b></label>
                                <div class="input-group mb-2 mt-2">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-staff-snake"></i></span>
                                    <input type="text" class="form-control shadow-none" placeholder="Nhập tiêu đề"
                                        v-model = "list.tieu_de" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-md-6">
                                    <label for=""><b>Số giao dịch</b></label>
                                    <div class="input-group mb-2 mt-2">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-bookmark"></i></span>
                                        <input type="text" class="form-control shadow-none" placeholder="Nhập giao dịch"
                                            aria-label="Username" aria-describedby="basic-addon1"
                                            v-model = "list.so_giao_dich">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><b>Tình trạng</b></label>
                                    <select class="form-select form-control mt-2 mb-2" aria-label="Large select example"
                                        v-model = "list.tinh_trang">
                                        <option selected disabled>Mặc định</option>
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Tạm tắt</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <div class="btn btn-primary" v-on:click="themMoiData()">Thêm mới</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-6">
                                    <h5 class="text-danger mb-0" style="font-weight: bold">Quản lý Dịch vụ game
                                    </h5>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control shadow-none py-2 my-2 fs-6" placeholder="Tìm kiếm theo tên!"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text py-2 my-2 fs-6 btn btn-danger" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center fs-6 align-middle text-dark"><b>#</b></th>
                                    <th class="text-center fs-6 align-middle text-dark" style="width: 20%;"><b>Hình
                                            ảnh</b>
                                    </th>
                                    <th class="text-center fs-6 align-middle text-dark"><b>Tên sản phẩm</b></th>
                                    <th class="text-center fs-6 align-middle text-dark"><b>Số giao dịch</b></th>
                                    <th class="text-center fs-6 align-middle text-dark"><b>Tình trạng</b></th>
                                    <th colspan="2" class="text-center fs-6 align-middle text-dark"><b>Action</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value,key) in list_dich_vu_game">
                                    <tr>
                                        <th class="text-center align-middle">@{{ key + 1 }}</th>
                                        <td class="text-center align-middle"><img v-bind:src="value.hinh_anh" alt=""
                                                width="50%" class="img-thumbnail"></td>
                                        <td class="text-center align-middle" style="width: 200px;">@{{ value.tieu_de }}
                                        </td>
                                        <td class="text-center align-middle">@{{ value.so_giao_dich }}</td>
                                        <td class="text-center align-middle">
                                            <div class="btn btn-success" v-if="value.tinh_trang == 1"
                                                v-on:click="value.tinh_trang = 0 ;chuyenDoiTrangThai(value)">Hiển thị
                                            </div>
                                            <div class="btn btn-warning" v-if="value.tinh_trang == 0"
                                                v-on:click="value.tinh_trang = 1 ; chuyenDoiTrangThai(value) ">Tạm tắt
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div><i style="cursor: pointer;" class="fa-solid fa-trash text-danger fs-4"
                                                    data-bs-toggle="modal" data-bs-target="#modalXoa"
                                                    v-on:click="dataXoa = value"></i></div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div><i style="cursor: pointer;" data-bs-toggle="modal"
                                                    data-bs-target="#modalUpdate"
                                                    v-on:click="list_update = Object.assign({}, value)"
                                                    class="fa-solid fa-pen-to-square text-primary fs-4"></i></div>
                                        </td>
                                    </tr>

                                    {{-- modal xóa --}}
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalXoa" tabindex="-1" aria-labelledby="modalXoaLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalXoaLabel">Xóa Items</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="alert alert-danger" role="alert">
                                                        <b><i>Bạn có chắc chắn muốn xóa ? </i></b>
                                                    </div>
                                                    <i class="fa-solid fa-play"></i> <b><i> @{{ dataXoa.tieu_de }}</i></b>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="btn btn-primary" data-bs-dismiss="modal">Canel</div>
                                                    <div class="btn btn-danger" v-on:click="xoaData(dataXoa)">Remove</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end model xóa --}}

                                    <!-- Modal Update-->
                                    <div class="modal fade" id="modalUpdate" tabindex="-1"
                                        aria-labelledby="modalUpdateLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalUpdateLabel">Update Items</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row"><label for=""><b>Hình
                                                                        ảnh</b></label>
                                                                <div class="input-group mb-2 mt-2"><span id="basic-addon1"
                                                                        class="input-group-text"><i
                                                                            class="fa-solid fa-image"></i></span> <input
                                                                        type="text" placeholder="Nhập hình ảnh"
                                                                        aria-label="Username"
                                                                        v-model="list_update.hinh_anh"
                                                                        aria-describedby="basic-addon1"
                                                                        class="form-control shadow-none"></div> <label
                                                                    for=""><b>Tiêu đề sản phẩm</b></label>
                                                                <div class="input-group mb-2 mt-2"><span id="basic-addon1"
                                                                        class="input-group-text"><i
                                                                            class="fa-solid fa-staff-snake"></i></span>
                                                                    <input type="text" placeholder="Nhập tiêu đề"
                                                                        v-model="list_update.tieu_de"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1"
                                                                        class="form-control shadow-none">
                                                                </div>
                                                                <div class="col-md-6"><label for=""><b>Số giao
                                                                            dịch</b></label>
                                                                    <div class="input-group mb-2 mt-2"><span
                                                                            id="basic-addon1" class="input-group-text"><i
                                                                                class="fa-solid fa-bookmark"></i></span>
                                                                        <input type="text" placeholder="Nhập giao dịch"
                                                                            aria-label="Username"
                                                                            v-model = "list_update.so_giao_dich"
                                                                            aria-describedby="basic-addon1"
                                                                            class="form-control shadow-none">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for=""><b>Tình
                                                                            trạng</b></label>
                                                                    <select aria-label="Large select example"
                                                                        v-model="list_update.tinh_trang"
                                                                        class="form-select form-control mt-2 mb-2">
                                                                        <option selected="selected" disabled="disabled">
                                                                            Mặc
                                                                            định</option>
                                                                        <option value="1">Hiển thị</option>
                                                                        <option value="0">Tạm tắt</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="btn btn-primary" data-bs-dismiss="modal">Cancel</div>
                                                    <div class="btn btn-success" v-on:click="updateData()">Update</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end model update --}}
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
    <script>
        new Vue({
            el: '#app',
            data: {
                list_dich_vu_game: [],
                dataXoa: '',
                list_update: {},
                list: {
                    hinh_anh: '',
                    tieu_de: '',
                    so_giao_dich: '',
                    tinh_trang: '',
                },
            },
            created() {
                // Sử dụng Promise.all để gửi các yêu cầu GET đồng thời
                this.hienThiData();
            },

            methods: {
                chuyenDoiTrangThai(value) {
                    axios
                        .post('http://127.0.0.1:8000/api/api-chuyenDoiTrangThaiDV-danhMucGame-nro', value)
                        .then((res) => {
                            this.hienThiData();
                        })
                },
                themMoiData() {
                    axios
                        .post('http://127.0.0.1:8000/api/api-taoData-dichVuGame-nro', this.list)
                        .then((res) => {
                            this.hienThiData();
                        })
                },
                xoaData(value) {
                    axios
                        .post('http://127.0.0.1:8000/api/api-xoaData-dichVuGame-nro', value)
                        .then((res) => {
                            this.hienThiData();
                        })

                    $('#modalXoa').modal('hide'); // Ẩn modal
                    $('body').removeClass('modal-open'); // Loại bỏ lớp modal-open
                    $('.modal-backdrop.show').remove(); // Xóa lớp overlay
                    this.hienThiData();
                },
                updateData() {
                    axios
                        .put('http://127.0.0.1:8000/api/api-updateData-dichVuGame-nro', this.list_update)
                        .then((res) => {
                            this.hienThiData();
                        })

                    $('#modalUpdate').modal('hide'); // Ẩn modal
                    $('body').removeClass('modal-open'); // Loại bỏ lớp modal-open
                    $('.modal-backdrop.show').remove(); // Xóa lớp overlay
                    this.hienThiData();
                },
                hienThiData() {
                    axios
                        .get('http://127.0.0.1:8000/api/api-dichVuGame-nro')
                        .then((res) => {
                            this.list_dich_vu_game = res.data;
                        })
                }
            },
        });
    </script>
@endsection
