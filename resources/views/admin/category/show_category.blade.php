@extends('admin.layout')
@section('container')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Danh sách danh mục</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{url('admin/add-category')}}" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa-solid fa-square-plus"></i>
                    </span>
                    <span class="text">Thêm danh mục</span>
                </a>
                <a href="{{route('category.trashed')}}"class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash" ></i>
                    </span>
                    <span class="text" style="width:120px">Thùng Rác</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive" >
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th >Tên danh mục</th>
                                <th>Đường dẫn</th>
                                <th>Trạng Thái</th>
                                <td>Thao tác</td>
                            </tr>
                        </thead>
                        @foreach ($category as $key=> $item)                                   
                            <tbody>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->slug}}</td>
                                <td>
                                    @if($item->hidden==0)
                                        <a href="{{route('category.active', ['id' => $item->id])}}"onclick="return confirm('Bạn có chắc muốn hiển thị ngành học này?')" class="btn btn-primary  btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <span class="text" style="width:120px">Ẩn</span>
                                        </a>
                                    @else
                                        <a href=" {{route('category.unactive', ['id' => $item->id])}}"onclick="return confirm('Bạn có chắc muốn bỏ hiển thị danh mục?')" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fa-solid fa-user"></i>
                                                </span>
                                                <span class="text" style="width:120px">Hiện</span>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <div>
                                        <form class="d-inline" action="{{route('category.destroy',['category'=> $item->id])}}" method="POST">
                                            @csrf @method('delete')
                                            <a class="btn btn-primary btn-sm mx-1"
                                            href="{{url('admin/edit-category',$item->id)}}" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                            <button onclick="return confirm('Bạn muốn xóa mục này?')"
                                                class="btn p-0 mx-0"> 
                                                <a class="btn btn-danger btn-sm mx-1"
                                                href="{{route('category.softDelete',['id'=> $item->id])}}" title="Xóa"> <i class="fas fa-trash"></i></a>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
