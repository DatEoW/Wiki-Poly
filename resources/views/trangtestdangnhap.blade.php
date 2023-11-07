@if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif
<?php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
if ($user) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- User Profile Card -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo "Xin chào " . $user->name; ?></h5>
            <p class="card-text"><?php echo "Email: " . $user->email; ?></p>
            <a href="#" class="btn btn-primary">Chỉnh sửa thông tin</a>
            <a href="/logout" class="btn btn-danger">Đăng xuất</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Link to Bootstrap JS (required for certain Bootstrap features) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php    
} else {
    echo "Bạn chưa đăng nhập";
}
?>