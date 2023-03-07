<?php
require_once '../ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $noidung=$_POST['text'];
    $ma_hh= $_POST['ma_hh'];
    $ma_kh= $_POST['ma_kh'];
    $date=$_POST['ngay_nhap'];
    //Câu lệnh SQL INSERT
    $sql = "INSERT INTO binh_luan(noi_dung,ma_hh,ma_kh,ngay_nhap) VALUES('$noidung','$ma_hh','$ma_kh','$date')";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header("Location: showbl.php?message=Thêm dữ liệu thành công");
    die;
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
            border: 2px solid red;
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
            background-color: aquamarine;
            width: 1000px;
            height: 700px;
            margin-left: 300px;
        }
    </style>
</head>

<body>
    <div class="khung">
    <div class="title">
        <h1>Thêm khách hàng</h1>
    </div>
    <div class="form">
        <form action="addbl.php" method="post" enctype="multipart/form-data">
            <div class="user-name">
                <label for="">Nội dung</label>
                <input type="text" name="text" placeholder="Nội dung">
            </div>
            <div class="password">
                <label for="">Mã hàng hóa</label>
                <input type="text" name="ma_hh"  placeholder="Mã hàng hóa">
            </div>
            <div class="phone">
                <label for="">Mã khách hàng</label>
                <input type="text" name="ma_kh" >
            </div>
            <div class="file">
            <label for="">Ngày nhập</label>
            <input type="date" name="ngay_nhap" id="">
            <br>
            <br>
            <button type="submit">Nhập</button>
        </form>
    </div>
    </div>
</body>

</html>