@extends('admin.layout')

@section('container')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Thùng rác ngành học</h1>

        <div class="card shadow mb-4">
            <div class="px-4">
                <a href="{{route('major.index')}}" class="btn mt-1 btn-warning">Trở lại</a>
            </div>
            <div class="card-body">
                <a href="{{route('major.restoreAll')}}" class="btn btn-success mt-1 mb-2">Khôi phục tất cả &nbsp;<i class="fas fa-recycle"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ngành học</th>
                                <th>Đường dẫn</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($majorTrash->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Thùng rác rỗng.
                                    </td>
                                </tr>
                            @else
                                @foreach ($majorTrash as $mj)
                                <tr>
                                    <td>{{$mj->id}}</td>
                                    <td>{{$mj->name}}</td>
                                    <td>{{$mj->slug}}</td>
                                    <td>
                                        <div>
                                            <form class="d-inline" action="" method="post"> @csrf @method('DELETE')
                                                <a class="p-2 btn btn-success btn-sm m-1"
                                                    href="{{route('major.restore',['id'=>$mj->id])}}" title="Hoàn tác"><i class="fas fa-trash-restore"></i></a>
                                                <a href="{{route('major.delete',['id'=>$mj->id])}}"
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