@extends('admin.layout')
@section('container')
<!DOCTYPE html>
<html>
<style>
    .button-34 {
        background: #17A2B8;
        border-radius: 50%;
        box-shadow: #17A2B8 0 10px 20px -10px;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotoColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        opacity: 1;
        outline: 0 solid transparent;
        padding: 8px 18px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: fit-content;
        word-break: break-word;
        border: 0;
    }

    .ck-editor__editable_inline {
        min-height: 250px;
        max-height: 450px;
    }

</style>

<head>
    <script src="https://kit.fontawesome.com/073099d884.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
{{-- @if (Session::has('success'))
    <div class="alert alert-success text-center">
        {{ Session::get('success') }}
    </div>
@endif --}}
<div class="card p-0 m-4">

    <div class="card-header">

        <div class="row col-12">
            <div class="col col-xl-6"><b>
                    <h1>Sửa Tin</h1>
                </b></div>
            <div class="col col-xl-6 mt-2">
                <a href="{{ route('list-post') }}"><button class="button-34 btn-sm float-end" role="button"> Danh
                        sách sản phẩm</button></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label class="form-label">Tên Tin:</label>

                        <input type="text" name="title" value="{{$post->title}}"class="form-control" />
                        @error('name')
                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label class="form-label ">Mô Tả:</label>
                        <textarea name="content" id="contented" class="form-control" rows="10" cols="70" >{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Hình Tin:</label>
                        <input type="file" name="img" value="{{$post->img}}"
                         class="form-control" id="url_imaged" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Chú Thích:</label>
                        <input type="text"  name="summarize" class="form-control" value="{{$post->summarize}}" />

                    </div>
                    <div class="form-group">
                        <label class="form-label">Danh Mục:</label>
                        <select name="id_cate" value="" class="form-control">
                            @foreach($cate as $key => $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Chuyên Nghành:</label>
                        <select name="id_major" value="{{ old('id_brand') }}" class="form-control">
                            @foreach ($major as $key => $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                        @error('id_brand')
                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label class="form-label">Chuyên Nghành Học:</label>
                        <select name="id_major_child" value="{{ old('id_brand') }}" class="form-control">
                            @foreach($majorC as $key => $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                     </select>
                        @error('id_brand')
                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                        @enderror

                    </div>


                   {{--  <div class="form-group">
                        <label class="form-label">Số Lượng:</label>
                        <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control" />
                        @error('quantity')
                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label class="form-label">Trạng Thái:</label>
                        <div class="form-control">
                            @if(isset($post->hidden) && $post->hidden == 1)
                            <label for="">
                                <input type="radio" name="hidden" id="" value="1" checked> Hiện
                            </label>
                            <label for="">
                                <input type="radio" name="hidden" id="" value="0"> Ẩn
                            </label>
                            @else
                            <label for="">
                                <input type="radio" name="hidden" id="" value="1"> Hiện
                            </label>
                            <label for="">
                                <input type="radio" name="hidden" id="" value="0" checked> Ẩn
                            </label>
                            @endif

                        </div>
                        @error('status')
                            <small class="text-danger ">{{ $message }}</small>
                        @enderror

                    </div>
                </div>

            </div>

            <div class="text-start">
                <input type="submit" class="btn btn-primary text-capitalize" value="Sửa Tin" />
                <button type="reset" class="btn btn-warning ml-2">Làm Mới</button>
            </div>
        </form>
    </div>
</div>


</body>
<script src="{{asset('ckeditor5/ckeditor.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/translations/vi.js"></script>

<script>
        ClassicEditor.create(document.querySelector('#contented'), {
            language: 'vi',
            ckfinder:{
                uploadUrl:'{{route('ckeditor.upload').'?_token='.csrf_token()}}'
            }
        })
        .then(editor => {
            console.log( editor );
        })
        .catch(error => {
            console.error(error)
        });

</script>

</html>


@endsection
