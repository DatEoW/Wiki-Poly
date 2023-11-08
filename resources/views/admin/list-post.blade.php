@extends('admin.layout')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Tin</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- @if (session('status'))
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
                <span class="text">Thông báo thành công</span>

            </a>
            <a href="#" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Thông báo không thành công</span>

            </a>
             @endif -->
             <a href="add-post" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                <i class="fa-solid fa-square-plus"></i>
                </span>
                <span class="text">Thêm</span>

            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tiêu Đề</th>
                            <th width="60px" >Loại Tin</th>
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
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            @php
                            $cate = DB::table('category')->where('id',$post->id_cate)->first();
                            @endphp
                            <td>{{$cate->name}}</td>
                            <td>{{Str::limit($post->content, 150)}}</td>
                            <td><p><a href="http://127.0.0.1:8000/post/{{$post->slug}}" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-eye" style="font-size: 14px"></i>
                                </span>
                                <span class="text" style="width:120px">Xem</span>
                            </a></p></td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                    <p>
                                        <!-- khi click vào sẽ sang trạng thái ẩn, click lần nữa thì trạng thái hiện -->
                                        @if($post->hidden == 1)
                                        <a href="hidden-post{{$post->id}}" class="btn btn-primary btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-eye" style="font-size: 14px"></i>
                                                </span>
                                                <span class="text" style="width:120px" >Đang Hiện</span>
                                            </a>
                                        @else
                                        <a href="hidden-post{{$post->id}}" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fa-solid fa-eye-slash"style="font-size: 14px"></i>
                                                </span>
                                                <span class="text" style="width:120px" >Đang Ẩn</span>
                                            </a>
                                        @endif
                                        </p>
                                    <p><a href="delete-post{{$post->id}}"onclick="return confirm('Bạn có chắc muốn bỏ vào thùng rác?')" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash" ></i>
                                            </span>
                                            <span class="text" style="width:120px">Thùng Rác</span>
                                        </a>
                                    </p>
                                        <p><a href="edit-post{{$post->id}}" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit" style="font-size: 14px"></i>
                                            </span>
                                            <span class="text" style="width:120px">Cập nhật</span>
                                        </a></p>
                                </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
