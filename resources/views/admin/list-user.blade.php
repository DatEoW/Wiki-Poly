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
                <span class="text">Thông báo thành công</span>

            </a>
            <a href="#" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Thông báo không thành công</span>

            </a>
             @endif






        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>image</th>
                            <th>email</th>
                            <th>password</th>
                            <th>address</th>
                            <th>phone</th>
                            <th>status</th>
                            <th>role</th>
                            <th>Hanh Dong</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Tiêu Đề</th>
                            <th>Loại Tin</th>
                            <th>Nội Dung</th>
                            <th>Xem Thử</th>
                            <th>Ngày Tạo</th>
                            <th>Hành Động</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($listuser as $user)
                        <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td> {{$user ->img}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->address}}</td>     
                        <td>{{$user->phone}}</td>
                        <td>{{$user->status}}</td>
                        <td>{{$user->role}}</td>
                        {{-- <td><a href="/user/update/{{$user->id}}">asda</a> </td> --}}
                        <td>
                            <p><a href="/user/delete/{{$user->id}}"onclick="return confirm('Bạn có chắc muốn bỏ vào thùng rác?')" class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash" ></i>
                                </span>
                                <span class="text" style="width:120px">Thùng Rác</span>
                               
                            </a>
                        </p>
                            <p><a href="/user/update/{{$user->id}}" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit" style="font-size: 14px"></i>
                                </span>
                                <span class="text" style="width:120px" >Cập nhật</span>
                                {{-- <span class="text" style="width:120px"><a href="/user/delete/{{$user->id}}"></a>Delete</span> --}}
                            </a></p>
                            {{-- <a href="/user/update/{{ $user->id }}">Update</a> <br>
                            <a href="/user/delete/{{ $user->id }}">Delete</a> --}}
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
