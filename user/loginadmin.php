<?php
SESSION_START();
require '../admin/ketnoi.php';
if(isset($_POST['dangnhap']) == true){
    $ten = $_POST['ten'];
    $matkhau = $_POST['matkhau'];
    $vaitro = $_POST['vai_tro'];
    //echo "<p>$name $matkhau</p>";
    $sql= "SELECT * FROM khach_hang where ho_ten = ? AND mat_khau = ? AND trang_thai=1 AND vai_tro=1";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ten,$matkhau]);
    if($stmt->rowCount() == 1){
      $user = $stmt->fetch();
      $_SESSION['login_id'] = $user['ma_kh'];
      $_SESSION['login_user'] = $user['ho_ten'];
      $_SESSION['login_matkhau'] = $user['mat_khau'];
      //echo "đăng nhập thành công";print_r($_SESSION);
      header("location: ../admin/showadmin.php");
      die;
    }else{
      header("location: loginadmin.php");
      die;
      
    }
  

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="color: red; margin-left: 700px; margin-top: 100px; ">mời admin đăng nhập</h1>
  <form method="POST" style="width: 500px; margin-top: 100px;" class="border border-warning border-2 m-auto p-2 " >
  <div class="form-group">
    <label for="tendangnhap">Tài khoản</label>
    <input type="text" class="form-control"  name="ten" placeholder="Nhập từ 5-20 ký tự">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mật khẩu</label>
    <input type="password" class="form-control"  name="matkhau" placeholder="Nhập mật khẩu">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu </label>
  </div>
  <button type="submit" name="dangnhap" values="dn" class="btn btn-primary">Login</button>
</form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>