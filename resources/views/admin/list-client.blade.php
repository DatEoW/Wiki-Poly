@extends('admin.layout')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Tin</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            @if (session('status'))
            <a href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">{{ session('status') }} {{ session('tieuDe') }}</span>
            </a>
            @else

            <a href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">thông báo thành công</span>

            </a>
            <a href="#" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">thông báo không thành công</span>

            </a>
             @endif


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Cửa hàng</th>
                            <th>Thời hạn</th>
                            <th>Ngày Tạo</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Cửa hàng</th>
                            <th>Thời hạn</th>
                            <th>Ngày Tạo</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <td>Tên</td>
                            <td>Email</td>
                            <td>Địa Chỉ</td>
                            <td>Cửa hàng</td>
                            <td>Thời hạn</td>
                            <td>Ngày Tạo</td>
                            <td><p><a href=" "onclick="return confirm('Bạn có chắc muốn bỏ khóa?')" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <span class="text" style="width:120px">Hoạt Động</span>
                                    </a>
                                    {{-- <a href=" "onclick="return confirm('Bạn có chắc muốn bỏ khóa?')" class="btn btn-dark btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa-solid fa-user-slash"></i>
                                        </span>
                                        <span class="text" style="width:120px">Khóa</span>
                                    </a> --}}


                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
