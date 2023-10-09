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
                            <th>Tài Khoản</th>

                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Thu Về</th>
                            <th>Nguồn Thu</th>
                            <th>Ngày Tạo</th>



                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tài Khoản</th>

                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Thu Về</th>
                            <th>Nguồn Thu</th>
                            <th>Ngày Tạo</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <td>Tài Khoản</td>

                        <td>Email</td>
                        <td>SĐT</td>
                        <td>Thu Về</td>
                        <td>Nguồn Thu</td>
                        <td>Ngày Tạo</td>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
