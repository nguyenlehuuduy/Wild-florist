@extends('admin_layout')
@section('admin_content')
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">Bản kê lương</li>
                <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Tạo mới bảng kê lương</h3>
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                                            class="fas fa-folder-plus"></i> Tạo trạng thái mới</b></a>
                            </div>
                        </div>
                        <form class="row" action="{{ route('luong.store') }}" method="POST">
                            @csrf
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên nhân viên</label>
                                <input class="form-control" name="TenNV" type="text" placeholder="Nhập họ tên nhân viên">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleSelect1" class="control-label">Giới tính</label>
                                <select class="form-control" name="GioiTinh" id="exampleSelect1">
                                    <option selected>-- Chọn giới tính --</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleSelect1" class="control-label"> Chức vụ</label>
                                <select class="form-control" name="ChucVu" id="exampleSelect1">
                                    <option selected>-- Chọn chức vụ --</option>
                                    <option value="Bán hàng">Bán hàng</option>
                                    <option value="Tư vấn">Tư vấn</option>
                                    <option value="Dịch vụ">Dịch vụ</option>
                                    <option value="Thu Ngân">Thu Ngân</option>
                                    <option value="Quản kho">Quản kho</option>
                                    <option value="Bảo trì">Bảo trì</option>
                                    <option value="Kiểm hàng">Kiểm hàng</option>
                                    <option value="Bảo vệ">Bảo vệ</option>
                                    <option value="Tạp vụ">Tạp vụ</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Tiền lương</label>
                                <input class="form-control" name="TienLuong" placeholder="Nhập tiền lương" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Tiền bị trừ</label>
                                <input class="form-control" name="TruLuong" placeholder="Nhập tiền lương trừ" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Tiền thưởng</label>
                                <input class="form-control" name="TienThuong" placeholder="Nhập tiền thưởng" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Tổng nhận</label>
                                <input class="form-control" name="TongNhan" placeholder="Tổng nhận" type="text">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleSelect1" class="control-label">Trạng thái</label>
                                <select class="form-control" name="TrangThai" id="exampleSelect1">
                                    <option selected>-- Chọn trạng thái --</option>
                                    <option value="Đã nhận tiền">Đã nhận tiền</option>
                                    <option value="Chưa nhận tiền">Chưa nhận tiền</option>
                                </select>
                            </div>
                            <button class="btn btn-save" type="submit">Lưu lại</button>
                            <a class="btn btn-cancel" href="{{ URL::to('/luong') }}">Hủy bỏ</a>
                        </form>
                    </div>

                </div>
    </main>


    <!--
                                                                          MODAL
                                                                        -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Tạo trạng thái mới</h5>
                            </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nhập tên trạng thái mới</label>
                            <input class="form-control" type="text" required>
                        </div>
                    </div>
                    <BR>
                    <button class="btn btn-save" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <BR>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--
                                                                        MODAL
                                                                        -->



    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
@endsection
