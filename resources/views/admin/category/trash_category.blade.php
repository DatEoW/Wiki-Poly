@extends('admin.layout')

@section('container')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Thùng rác danh mục</h1>

        <div class="card shadow mb-4">
            <div class="px-4">
                <a href="{{route('list-category')}}" class="btn mt-1 btn-warning">Trở lại</a>
            </div>
            <div class="card-body">
                <a href="{{route('category.restoreAll')}}" class="btn btn-success mt-1 mb-2">Khôi phục tất cả &nbsp;<i class="fas fa-recycle"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên danh mục</th>
                                <th>Slug</th>     
                                <th>Ngày Tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($categoryTrash->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Thùng rác rỗng.
                                    </td>
                                </tr>
                            @else
                                @foreach ($categoryTrash as $c)
                                <tr>
                                    <td>{{$c->id}}</td>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->slug}}</td>
                                    <td>{{$c->created_at}}</td>
                                    <td>
                                        <div>
                                            <form class="d-inline" action="" method="post"> @csrf @method('DELETE')
                                                <a class="p-2 btn btn-success btn-sm m-1"
                                                    href="{{route('category.restore',['id'=>$c->id])}}" title="Hoàn tác"><i class="fas fa-trash-restore"></i></a>
                                                <a href="{{route('category.delete',['id'=>$c->id])}}"
                                                    onclick="return confirm('Bạn có chắc muốn xóa danh mục vĩnh viễn?')"
                                                    class="p-2 btn btn-danger btn-sm m-1"
                                                    title="Xóa">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </form>  
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection