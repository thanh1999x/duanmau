<?php
require_once '../ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $makh = $_POST['ma_kh'];
    $tenkh = $_POST['ho_ten'];
    $pass = $_POST['mat_khau'];
    $status = $_POST['trang_thai'];
    $email = $_POST['email'];
    $vaitro = $_POST['vai_tro'];
    $anh = $_FILES['hinh']['name'];
    if ($_FILES['hinh']['size'] > 0) {
        //upload ảnh
        move_uploaded_file($_FILES['anh']['tmp_name'], '../images/' . $anh);
    }


    //Câu lệnh SQL UPDATE
    $sql = "UPDATE khach_hang SET ma_kh='$makh', ho_ten='$tenkh', mat_khau='$pass', trang_thai='$status', hinh='$anh', email='$email',vai_tro=$vaitro WHERE ma_kh=$makh";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location: showkh.php?message=sửa dữ liệu thành công");
    die;
}
//lấy dữ liệu trên thanh url
$ma_kh = $_GET['ma_kh'];
$sql = "SELECT * FROM khach_hang WHERE ma_kh=$ma_kh";
$stmt = $conn->prepare($sql);
$stmt->execute();
//Lấy 1 dòng dữ liệu
$sp = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($sp);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa Khách hàng</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }

        .title {
            text-align: center;
        }

        form {
            border: 2px solid blue;
            width: 500px;
        }

        form input {
            width: 50%;
            height: 30px;
        }

        form div {
            margin: 10px 20px;
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
            width: 90%;
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
    </style>
</head>

<body>
    <div class="title"> 
        <h1>sửa Khách hàng</h1>
    </div>
    <div class="form">
        <form action="editkh.php?ma_kh=<?=$sp['ma_kh'] ?>" method="post" enctype="multipart/form-data">
            <div class="product_id">
                <input type="hidden" name="ma_kh" value="<?=$sp['ma_kh'] ?>">
            </div>
            <div class="product_name">
                <label for="">Họ tên khách</label>
                <input type="text" name="ho_ten" placeholder="Tên sản phẩm" value="<?=$sp['ho_ten'] ?>">
            </div>
            <div class="Description">
                <label for="">Password</label>
                <input type="password" name="mat_khau" value="<?=$sp['mat_khau'] ?>">
            </div>
            <div class="price">
                <label for="">Trạng thái</label>
                <input type="number" name="trang_thai" min=0 step="1" value="<?=$sp['trang_thai'] ?>">
            </div>
            <div class="images">
                <label for="">Ảnh</label>
                <input id="image" type="file" name="hinh" id="">
                <br>
                <img src="../images/<?=$sp['hinh'] ?>" width="120" alt="">
                <input type="hidden" name="anh" value="<?=$sp['hinh'] ?>">
            </div>
            <br>
            <div class="hi1">
                <label for="">Email</label>
                <input type="email" name="email" value="<?=$sp['email']?>">
            </div>
            <div class="hi2">
                <label for="">Vai trò</label>
                <input type="number" name="vai_tro"value="<?=$sp['vai_tro']?>">
            </div>

            <div class="btn">
                <button type="submit">Lưu lại</button>
            </div>
        </form>
    </div>
</body>

</html>