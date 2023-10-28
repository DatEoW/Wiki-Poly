@extends('admin.layout')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thêm danh mục</h1>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Form</strong> Danh mục 
            
            </div>
            <div class="card-body card-block">
                <form action="{{url('admin/save-category')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="" class=" form-control-label">Tên danh mục</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="slug" onkeyup="ChangeToSlug();" name="category_name" placeholder="Text" class="form-control">
                          

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="" class=" form-control-label">Slug</label>
                        
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="convert_slug" name="category_slug" placeholder="Text" class="form-control">
                        </div>
                    </div>
                 
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Ẩn/Hiện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="category_hidden" id="select" class="form-control">
                                <option value="1">Hiện</option>      
                                <option value="0">Ẩn</option>
                                                 
                            </select>
                        </div>
                    </div>
                
          
                  
                 
                  
                    <div class="card-footer">
                        <button type="submit" name="category_add" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Thêm 
                        </button>
                      
                    </div>

                </form>
        </div>
        </div>
    </div>
    </div>
  

</div>

@endsection