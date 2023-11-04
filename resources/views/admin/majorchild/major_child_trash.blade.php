@extends('admin.layout')

@section('container')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Thùng rác chuyên ngành học</h1>

        <div class="card shadow mb-4">
            <div class="px-4">
                <a href="{{route('majorC.index')}}" class="btn mt-1 btn-warning">Trở lại</a>
            </div>

            <div class="card-body">
                <a href="{{route('majorC.restoreAll')}}" class="btn btn-success mt-1 mb-2">Khôi phục tất cả &nbsp;<i class="fas fa-recycle"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Chuyên ngành học</th>
                                <th>Ngành cha</th>
                                <th>Đường dẫn</th>
                                <th style="width: 100px;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($majorCTrash->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">
                                    Thùng rác rỗng
                                </td>
                            </tr>
                            @else
                                @foreach ($majorCTrash as $mjc)
                                <tr>
                                    <td>{{$mjc->id}}</td>
                                    <td>{{$mjc->name}}</td>
                                    <td>
                                        {{ $mjc->getMajor ? $mjc->getMajor->name:'Chưa xác định' }}
                                    </td>
                                    <td>{{$mjc->slug}}</td>
                                    <td>
                                        <div>
                                            <form class="d-inline" action="" method="post"> @csrf @method('DELETE')
                                                <a class="p-2 btn btn-success btn-sm m-1"
                                                    href="{{route('majorC.restore',['id'=>$mjc->id])}}" title="Hoàn tác"><i class="fas fa-trash-restore"></i></a>
                                                <a href="{{route('majorC.delete',['id'=>$mjc->id])}}"
                                                    onclick="return confirm('Bạn có chắc muốn xóa chuyên ngành học vĩnh viễn?')"
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