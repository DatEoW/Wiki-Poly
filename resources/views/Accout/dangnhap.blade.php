<!DOCTYPE html>
<html>
<head>
  <title>Form Đăng Ký</title>
  <!-- Thêm Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="mb-0 text-center">Đăng Ký</h4>
        </div>
        <div class="card-body">
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif
          <form method="post">
          @csrf
            <div class="form-group" action="{{ route('logingo') }}">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email">
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Đăng Nhập</button></br>
              <a href="/quenmatkhau">Quên mật khẩu</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Thêm Bootstrap JS và jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
