<?php
require_once '../ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $vai_tro=$_POST['vai_tro'];
    $anh=$_FILES['anh']['name'];
    if($_FILES['anh']['size'] >0){
        $anh=$_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'],'../images/'.$anh );
    }

    //Câu lệnh SQL INSERT
    $sql = "INSERT INTO khach_hang(ho_ten,mat_khau,trang_thai,hinh,email,vai_tro) VALUES('$name','$password','$status','$anh','$email','$vai_tro')";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    $stmt->execute();
        header("Location: showkh.php?message=Thêm dữ liệu thành công");
        die;;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm user</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }

        .title {
            text-align: center;
        }

        form {
            width: 500px;
        }

        form input {
            width: 50%;
            height: 30px;
        }

        form div {
            margin: 20px 20px;
        }

        .form {
            display: flex;
            justify-content: center;
        }

        .images {
            width: 70%;
            border: 2px solid black;
        }

        #image {
            width: 80%;
            text-align: center;
        }

        .btn {
            text-align: center;
        }

        .btn button {
            background-color: blue;
            color: white;
            border: none;
            width: 80px;
            height: 30px;
            border-radius: 10px;
        }

        .btn button:hover {
            opacity: 0.5;
        }
        .khung{
            background-color:aquamarine;
            width: 500px;
            height: 700px;
            margin-left: 500px;
        }
    </style>
</head>

<body>
    <div class="khung">
    <div class="title">
        <h1>Đăng ký ngay</h1>
    </div>
    <div class="form">
        <form action="addkh.php" method="post" enctype="multipart/form-data">
            <div class="user-name">
                <label for="">user name</label>
                <input type="text" name="name" placeholder="Tên user">
            </div>
            <div class="password">
                <label for="">password</label>
                <input type="text" name="password"  placeholder="password">
            </div>
            <div class="phone">
                <label for="">Trạng thái</label>
                <input type="text" name="status" >
            </div>
            <div class="file">
            <label for="">ảnh</label>
            <input type="file" name="anh" id="">
            </div>
            <div class="">
                <label for=""> email</label>
                <input type="email" name="email"  placeholder="email">
            </div>    
          <div class="section">
          <input type="number" name="vai_tro" id="" placeholder="0 là user 1 là admin">
          </div>
            <br>
            <div class="btn">
                <button type="submit">Lưu lại</button>
            
        </form>
    </div>
    </div>
</body>

</html>