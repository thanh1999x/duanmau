<?php
require_once '../ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $maloai=$_POST['loai'];
    $loai_hang =$_POST['ten_loai'];
    //Câu lệnh SQL INSERT
    $sql = "INSERT INTO loai(ma_loai,ten_loai)VALUES($maloai,'$loai_hang')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: showlh.php?');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../menu.css">
    <style>
          .form{
            margin-left: 100px;
        }
        .add{
            color: green;
            font-size: 35px;

        }
        .them{
            background-color: yellowgreen;
            margin-left: 60px;
        }
        .loaihang{
            margin-left: 500px;
            width: 400px;
            height: 400px;
            background-color: aquamarine;
            border: 1px solid #cdcdcd;
        }

    </style>
</head>
<body>
    <div class="loaihang">
    <div class="form">
    <form action="addloaihang.php" method="POST" >
        <h3 class="add">thêm loại hàng</h3>
        <label >mã loại</label>
        <br>
        <input type="text" name="loai">
        <br>
        <label >tên loại</label>
        <br>
        <input type="text" name="ten_loai" id="">
        <br>
        <br>
        <button type="submit" class="them">thêm</button>

    </form>
    </div>

</body>
</html>