@extends('admin.layout')
@section('container')
<style>

    #search{
        width: 20%;
        display:flex;
        margin-bottom: 20px;
        /* justify-content: flex-end; */
    }
    .input-group {
        margin-bottom: 10px; /* Điều chỉnh khoảng cách giữa input và button */
    }

    .btn {
        /* Tùy chỉnh kiểu dáng của button */

    }

</style>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Tin</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('post.add')}}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                <i class="fa-solid fa-square-plus"></i>
                </span>
                <span class="text">Thêm Tin Tức</span>
            </a>
            @if (session('status'))
            <a href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">{{ session('status') }} {{ session('tieuDe') }}</span>
            </a>
            @else
<!-- 
            <a href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Thông báo thành công</span>

            </a>
            <a href="#" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Thông báo không thành công</span>
            </a> -->
             @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
               <!-- <table class="table table-bordered" id="dataTable"  width="100%" cellspacing="0">  -->
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <form action="{{ url('/admin/list-post') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="search" name="search" class="form-control" id="search" placeholder="Tìm kiếm...">
                            <div class="input-group-append">
                                <button style="height: 39px;" type="submit" class="btn btn-primary">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                   <thead>  
                        <tr>
                            <th>Tiêu Đề</th>
                            <th>Loại Tin</th>
                            <th>Nội Dung</th>
                            <th>Xem Thử</th>
                            <th>Ngày Tạo</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tiêu Đề</th>
                            <th>Loại Tin</th>
                            <th>Nội Dung</th>
                            <th>Xem Thử</th>
                            <th>Ngày Tạo</th>
                            <th>Hành Động</th>
                        </tr>
                    </tfoot>
                    @foreach ($post as $item)
                    <tbody>
<<<<<<< HEAD
                        <tr>
                            <td>Tiêu Đề</td>
                            <td>Loại Tin</td>
                            <td>Nội Dung</td>
                            <td><p><a href="" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-eye" style="font-size: 14px"></i>
                                </span>
                                <span class="text" style="width:120px">Xem</span>
                            </a></p></td>
                            <td>Ngày Tạo</td>
                            <td>
                                    <p><a href="" class="btn btn-primary btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-eye" style="font-size: 14px"></i>
                                                </span>
                                                <span class="text" style="width:120px" >Đang Hiện</span>
                                            </a></p>
                                    <p><a href=" "onclick="return confirm('Bạn có chắc muốn bỏ vào thùng rác?')" class="btn btn-warning btn-icon-split">
=======
                        <td>{{$item->title}}</td>
                        <td>{{$item->id_cate}}</td>
                        <td>{{$item->content}}</td>
                        <td><p><a href="http://127.0.0.1:8000/list-post/{{$item->slug}}" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-eye" style="font-size: 14px"></i>
                            </span>
                            <span class="text" style="width:120px">Xem</span>
                        </a></p></td>
                        <td>{{$item->created_at}}</td>
                        <td>
                                <p><a href="" class="btn btn-primary btn-icon-split">
>>>>>>> origin/luan
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash" ></i>
                                            </span>
                                            <span class="text" style="width:120px">Thùng Rác</span>
                                        </a>
                                    </p>
                                        <p><a href="" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit" style="font-size: 14px"></i>
                                            </span>
                                            <span class="text" style="width:120px">Cập nhật</span>
                                        </a></p>
<<<<<<< HEAD
                                </td>
                        </tr>


=======
                                <p><a href="{{route('post.delete', $item->id)}}"onclick="return confirm('Bạn có chắc muốn bỏ vào thùng rác?')" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash" ></i>
                                        </span>
                                        <span class="text" style="width:120px">Thùng Rác</span>
                                    </a>
                                </p>
                                    <p><a href="{{route('post.edit', $item->id)}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit" style="font-size: 14px"></i>
                                        </span>
                                        <span class="text" style="width:120px">Cập nhật</span>
                                    </a></p>
                        </td>
>>>>>>> origin/luan
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {
        // Bắt sự kiện khi phím Enter được nhấn trong trường nhập liệu
        $('#search').keypress(function (e) {
            if (e.which === 13) { // Kiểm tra nếu phím là Enter
                e.preventDefault(); // Ngăn chặn hành động mặc định của nút Enter
                $('#searchForm').submit(); // Gửi biểu mẫu
            }
        });
    });
</script>
@endsection
