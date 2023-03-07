<?php
require_once '../ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $maloai = $_POST['ma_loai'];
    $tenloai = $_POST['ten_loai'];

    //Câu lệnh SQL UPDATE
    $sql = "UPDATE loai SET ma_loai='$maloai',ten_loai='$tenloai' WHERE ma_loai=$maloai";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location: showlh.php?message=sửa dữ liệu thành công");
    $message = "Cập nhật dữ liệu thành công.";
    die;
}

//Lấy ra mã của sản phẩm muốn sửa 
$masp = $_GET['ma_loai'];
$sql = "SELECT * FROM loai WHERE ma_loai=$masp";
$stmt = $conn->prepare($sql);
$stmt->execute();
//Lấy 1 dòng dữ liệu
$sp = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loại hàng</title>
    <style>

        .title {
            text-align: center;
        }

        form {
            border: 2px solid blue;
            width: 500px;
        }
        .form {
            display: flex;
            justify-content: center;
        }

        .btn button {
            background-color: blue;
            color: white;
            border: none;
            width: 80px;
            height: 30px;
            border-radius: 10px;
            margin-left: 200px;
        }

        .btn button:hover {
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <div class="title">
        <h1>sửa loại hàng</h1>
    </div>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="user_id">
                <input type="hidden" name="ma_loai" value="<?=$sp['ma_loai'] ?>">
            </div>
            <div class="product_name">
                <label for="">Tên loại</label>
                <input type="text" name="ten_loai" placeholder="Tên loại hàng" value="<?=$sp['ten_loai'] ?>">
            </div>
            <br>
            <div class="btn">
                <button type="submit">Lưu lại</button>
            </div>
        </form>
    </div>
</body>

</html>