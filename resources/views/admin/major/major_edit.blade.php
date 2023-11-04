@extends('admin.layout')

@section('container')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Chỉnh sửa ngành học</h1>
    <form action="/admin/major/{{$major->id}}" method="post" enctype="multipart/form-data" >
        @csrf {{method_field('PUT')}}
        <input type="hidden" name="id" value="{{$major->id}}">
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
                        <label for="title" class="form-label">Tên ngành học</label>
                        <input type="text" onkeyup="ChangeToSlug()" name="name" class="form-control" id="title" value="{{$major->name}}"/>
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
                            <input type="text" class="form-control" name="slug" id="path" readonly value="{{$major->slug}}"/>
                            <input type="hidden" value="0" class="form-control" name="url" id="path" readonly />
                        </div>
                    </div>
                    <div class=" col-lg-6 mb-3">
                        <label for="" class="form-label">Trạng thái</label><br>
                        <div class="d-flex">
                            <div class="form-check px-3">
                                <input class="form-check-input" name="hidden" type="radio" value="1" id="defaultCheck3" {{$major->hidden == 1? "checked":""}} />
                                <label class="form-check-label" for="defaultCheck3"> Hiện </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hidden" type="radio" value="0" id="defaultCheck4"{{$major->hidden == 0? "checked":""}} />
                                <label class="form-check-label" for="defaultCheck4"> Ẩn </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection