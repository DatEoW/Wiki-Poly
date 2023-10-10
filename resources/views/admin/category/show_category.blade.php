@extends('admin.layout')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách danh mục</h1>


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
           
        @endif
        

 
      
        <a href="{{url('admin/add-category')}}" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
              
            </span>
            <span class="text">Thêm danh mục</span>
        </a>
     
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên danh mục</th>
                            <th>Slug</th>      
                        
                            <th>Ngày Tạo</th>
                            <th>Trạng Thái</th>
                            <td></td>
                        </tr>
                    </thead>
                    @foreach ($category as $key=> $item)                                   
                    <tbody>
                        <td>{{$key}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->created_at}}</td>
                     
                            <td>
                                @if($item->hidden==0)
                                    <a href="{{url('admin/unactive-category/'.$item->id)}}"onclick="return confirm('Bạn có chắc muốn khóa?')" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <span class="text" style="width:120px">Mở khóa</span>
                                    </a>
                                @else

                                <a href=" {{url('admin/active-category/'.$item->id)}}"onclick="return confirm('Bạn có chắc muốn bỏ khóa?')" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <span class="text" style="width:120px">Khóa</span>
                             </a>

                                @endif


                            </td>
                            <td>
                                <a href="{{url('admin/edit-category',$item->id)}}" class="btn btn-outline-primary">Sửa</a>
                                <a href="{{url('admin/delete-category',$item->id)}}" class="btn btn-outline-danger">Xóa</a>
                            </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
