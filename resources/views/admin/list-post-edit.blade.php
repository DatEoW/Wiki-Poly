@extends('admin.layout')
@section('container')
<div class="container-fluid">

    <!-- ... other content ... -->

    <div class="card-body">
        <!-- ... other content ... -->

        <table class="table table-bordered shadow p-3 mb-5 bg-white rounded" id="dataTable" width="100%" cellspacing="0">
            <!-- ... other content ... -->
            @if ($post)
                <tbody>
                    <!-- ... other content ... -->
                    <td>
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Tiêu Đề:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                            </div>

                            <div class="form-group">
                                <label for="summarize">Tóm Tắt:</label>
                                <textarea class="form-control" id="summarize" name="summarize">{{ $post->summarize }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">Nội Dung:</label>
                                <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="img">Ảnh:</label>
                                <input type="text" class="form-control" id="img" name="img" value="{{ $post->img }}">
                            </div>
                            <div>
                                <label for="views">Lượt Xem:</label>
                                <input type="hidden" class="form-control" id="views" name="views" value="{{ $post->views }}">
                                <input type="text" class="form-control" id="views" name="views" value="{{ $post->views }}" disabled>
                            </div>
                            <div>
                                <label for="id_user">ID User:</label>
                                @if($user)
                                <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{ $post->id_user }}">
                                <input type="text" class="form-control" id="id_user" name="id_user" placeholder="{{ $user->name }}" disabled>
                                @endif
                            </div>
                            <div>
                                <label for="id_major">ID Major:</label>
                                <select class="form-control" id="id_major" name="id_major">
                                @foreach ($major as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $post->id_major ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="id_cate">ID Cate:</label>
                                <select class="form-control" id="id_cate" name="id_cate">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $post->id_cate ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="created_at">Ngày Tạo:</label>
                                <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $post->created_at }}" disabled>
                            </div>
                            <div>
                                <label for="updated_at">Ngày Cập Nhật:</label>
                                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $post->updated_at }}" disabled>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                        </form>
                    </td>
                    <!-- ... other content ... -->
                </tbody>
            @endif
        </table>
    </div>
</div>
@endsection
