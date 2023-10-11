@extends('admin.layout')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Tin</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('post.add')}}" class="btn btn-success btn-icon-split">
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
            <!-- <a href="#" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">thông báo không thành công</span>

            </a>  -->
             @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                            <span class="icon text-white-50">
                                                <i class="fas fa-eye" style="font-size: 14px"></i>
                                            </span>
                                            <span class="text" style="width:120px" >Đang Hiện</span>
                                        </a></p>
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
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
