@extends('admin.layout')

@section('container')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Thêm chuyên ngành học</h1>
    <form action="{{asset('admin/majorC')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="card mb-4 card-border-top">
            <div class="card-body ">
                <div class="row d-flex">
                    <div class="col-lg-6 mb-3">
                        <button type="submit" class="btn btn-success px-5">Lưu</button>
                        <button type="reset" class="btn btn-primary px-5">Làm lại</button>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class=" col-lg-6 mb-3 ">
                        <label for="title" class="form-label">Tên chuyên ngành học</label>
                        <input type="text" onkeyup="ChangeToSlug()" name="name" class="form-control" id="title" value="{{old('name')}}"/>
                        @if ($errors->has("name")) 
                            @foreach ($errors->get("name") as $error) 
                                <small class="text-danger fst-italic">
                                    {{ $error }}
                                </small> 
                            @endforeach               
                        @endif
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="path" class="form-label">Đường dẫn</label>
                        <div class="mb-1">
                            <input type="text" class="form-control" name="slug" id="path" readonly />
                            <input type="hidden" value="0" class="form-control" name="url" id="path" readonly />
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="form-label">Trạng thái</label><br>
                        <div class="d-flex gap-3">
                            <div class="form-check px-4">
                                <input class="form-check-input" name="hidden" type="radio" value="1" id="defaultCheck3" checked />
                                <label class="form-check-label" for="defaultCheck3"> Hiện </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hidden" type="radio" value="0" id="defaultCheck4"/>
                                <label class="form-check-label" for="defaultCheck4"> Ẩn </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="cate-product" class="form-label">Danh mục</label>
                        <div class="box">
                            <select class="form-select" id="majorP" name="majorP">
                                @foreach ($majorP as $cate)
                                    @if (old('majorP') == $cate->id)
                                        <option value="{{$cate->id}}" selected>{{$cate->name}}</option>
                                    @else
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has("majorP"))                           
                                @foreach ($errors->get("majorP") as $error) 
                                    <small class="text-danger fst-italic">
                                        {{ $error }}
                                    </small> 
                                @endforeach                 
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection