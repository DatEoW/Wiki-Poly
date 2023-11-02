@extends('admin.layout')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Khach Hang</h1>


    {{-- {{-- <!-- DataTales Example --> --}}
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
        <div >
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Ten</th>
                            <th>img</th>
                            <th>email</th>
                            <th>password</th>
                            <th>Dia Chi</th>
                            <th>phone</th>
                            <th>Trạng Thái</th>                         
                            <th>Vai tro</th>
                            <th>edit | delete</th>
                        </tr>
                        
                        
                    </thead>
          
                   
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
                        <td>
                            <a href="/user/update/{{ $user->id }}">Update</a> <br>
                            <a href="/user/delete/{{ $user->id }}">Delete</a>
                        </td>
                    </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

</div> 
    
@endsection