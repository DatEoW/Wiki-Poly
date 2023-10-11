@extends('admin.layout')
@section('container')
<div class="container-fluid">

    <!-- ... other content ... -->

    <div class="card-body">
        <!-- ... other content ... -->

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <!-- ... other content ... -->
                <tbody>
                    <!-- ... other content ... -->
                    <td>
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Tiêu Đề:</label>
                                <input type="text" class="form-control" id="title" name="title" value="">
                            </div>

                            <div class="form-group">
                                <label for="summarize">Tóm Tắt:</label>
                                <textarea class="form-control" id="summarize" name="summarize"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">Nội Dung:</label>
                                <textarea class="form-control" id="content" name="content"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="img">Ảnh:</label>
                                <input type="text" class="form-control" id="img" name="img" value="">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug:</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="">
                            </div>
                            <div>
                                <label for="hot">Nổi Bật:</label>
                                <input type="radio" id="hot" name="hot" value="1">
                                <label for="hot">Bình Thường:</label>
                                <input type="radio" id="hot" name="hot" value="0">
                            </div>
                            <div>
                                <label for="hidden">Ẩn:</label>
                                <input type="radio" id="hidden" name="hidden" value="1">
                                <label for="hidden">Hiện:</label>
                                <input type="radio" id="hidden" name="hidden" value="0">
                            </div>
                            <div>
                                <label for="id_user">ID User:</label>
                                <input type="text" class="form-control" id="id_user" name="id_user">
                            </div>
                            <div>
                                <label for="id_major">ID Major:</label>
                                <select class="form-control" id="id_major" name="id_major">
                                @foreach ($major as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="id_cate">ID Cate:</label>
                                <select class="form-control" id="id_cate" name="id_cate">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                        </form>
                    </td>
                    <!-- ... other content ... -->
                </tbody>
        </table>
    </div>
</div>
@endsection
