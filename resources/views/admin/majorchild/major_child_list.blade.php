@extends('admin.layout')

@section('container')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Danh sách chuyên ngành học</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('majorC.create')}}" class="btn btn-success">Thêm mới &nbsp;<i class="bi bi-plus-circle"></i></a>
                <a href="{{route('majorC.trashed')}}" class="btn btn-danger">Thùng rác &nbsp;<i class='bx bxs-trash'></i></a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Chuyên ngành học</th>
                                <th>Ngành cha</th>
                                <th>Đường dẫn</th>
                                <th style="width: 80px;">Trạng thái</th>
                                <th style="width: 100px;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($majorC->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">
                                    Chưa có chuyên ngành học nào
                                </td>
                            </tr>
                            @else
                                @foreach ($majorC as $mjc)
                                <tr>
                                    <td>{{$mjc->id}}</td>
                                    <td>{{$mjc->name}}</td>
                                    <td>
                                        {{ $mjc->getMajor ? $mjc->getMajor->name:'Chưa xác định' }}
                                    </td>
                                    <td>{{$mjc->slug}}</td>
                                    <td>
                                        @if($mjc->hidden==0)
                                            <span style="color: red">Ẩn</span>
                                        @else
                                            <span style="color: green">Hiện</span>
                                        @endif                
                                    </td>
                                    <td>
                                        <div>
                                            <form class="d-inline" action="{{route('majorC.destroy', ['majorC' => $mjc->id])}}" method="POST">
                                                @csrf @method('delete')
                                                <a class="btn btn-primary btn-sm mx-1"
                                                href="{{route('majorC.edit', ['majorC' => $mjc->id])}}" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                                <button onclick="return confirm('Bạn muốn xóa mục này?')"
                                                    class="btn p-0 mx-0"> 
                                                    <a class="btn btn-danger btn-sm mx-1"
                                                    href="{{route('majorC.softDelete',['id'=> $mjc->id])}}" title="Xóa"> <i class="fas fa-trash"></i></a>
                                                </button>
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