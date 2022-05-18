@extends('admin_layout')
@section('admin_content')
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">Danh sách đơn hàng</li>
                <li class="breadcrumb-item"><a href="#">Sửa đơn hàng</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Tạo mới đơn hàng</h3>
                    <div class="tile-body">
                        <form class="row" action="{{ route('donhang.update', $donhang->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group  col-md-4">
                                <label class="control-label">ID đơn hàng ( Nếu không nhập sẽ tự động phát sinh )</label>
                                <input class="form-control" value="{{ $donhang->IDNV }}" name="IDDH"
                                    placeholder="Nhập ID đơn hàng" type="text">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Tên khách hàng</label>
                                <input class="form-control" name="TenKH" value="{{ $donhang->TenKH }}"
                                    placeholder="Nhập tên khách hàng" type="text">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Số điện thoại khách hàng</label>
                                <input class="form-control" name="SDT" value="{{ $donhang->SDT }}"
                                    placeholder="Nhập số điện thoại" type="number">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Địa chỉ khách hàng</label>
                                <input class="form-control" name="DiaChi" value="{{ $donhang->DiaChi }}"
                                    placeholder="Nhập địa chỉ khách hàng" type="text">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Tên người bán</label>
                                <input class="form-control" name="TenNB" value="{{ $donhang->TenNB }}"
                                    placeholder="Nhập tên người bán" type="text">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Số hiệu người bán</label>
                                <input class="form-control" name="SoHieu" value="{{ $donhang->SoHieu }}"
                                    placeholder="Nhập số hiệu người bán" type="text">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Ngày làm đơn hàng</label>
                                <input class="form-control" name="NgayLamDonHang" value="{{ $donhang->NgayLamDonHang }}"
                                    type="date">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Tên sản phẩm cần bán</label>
                                <input class="form-control" name="TenSP" value="{{ $donhang->TenSP }}"
                                    placeholder="Nhập tên sản phẩm" type="text">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Mã sản phẩm</label>
                                <input class="form-control" name="MaSP" value="{{ $donhang->MaSP }}"
                                    placeholder="Nhập mã sản phẩm" type="text">
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Số lượng</label>
                                <input class="form-control" name="SoLuong" value="{{ $donhang->SoLuong }}"
                                    placeholder="Nhập số lượng" type="number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleSelect1" class="control-label">Tình trạng</label>
                                <select class="form-control" name="TinhTrang" id="exampleSelect1">
                                    <option selected>-- Chọn tình trạng --</option>
                                    <option value="Đã xử lý" {{ $donhang->GioiTinh == 'Đã xử lý' ? 'selected' : '' }}>Đã
                                        xử lý
                                    </option>
                                    <option value="Đang chờ" {{ $donhang->GioiTinh == 'Đang chờ' ? 'selected' : '' }}>
                                        Đang chờ
                                    </option>
                                    <option value="Đã hủy" {{ $donhang->GioiTinh == 'Đã hủy' ? 'selected' : '' }}>Đã hủy
                                    </option>
                                </select>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Ghi chú đơn hàng</label>
                                <textarea class="form-control" value="{{ $donhang->GhiChu }}" name="GhiChu" rows="4"></textarea>
                            </div>
                            <button class="btn btn-save" type="submit">Lưu lại</button>
                            <a class="btn btn-cancel" href="{{ URL::to('/donhang') }}">Hủy bỏ</a>
                        </form>
                    </div>

                </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
@endsection
