<?php
require_once '../ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mahh = $_POST['ma_hh'];
    $tenhh = $_POST['ten_hh'];
    $gia = $_POST['don_gia'];
    $sale = $_POST['giam_gia'];
    $anh = $_FILES['anh']['name'];
    if ($_FILES['anh']['size'] > 0) {
        //upload ảnh
        move_uploaded_file($_FILES['anh']['tmp_name'], '../images/' . $anh);
    }

    $date = $_POST['ngay_nhap'];
    $text = $_POST['mo_ta'];
    $special = $_POST['dac_biet'];
    $view = $_POST['so_luot_xem'];
    $loai = $_POST['ma_loai'];

  
    //Câu lệnh SQL UPDATE
    $sql = "UPDATE hang_hoa SET ten_hh='$tenhh',don_gia=$gia,giam_gia=$sale,hinh='$anh',ngay_nhap='$date',mo_ta='$text', dac_biet=$special,so_luot_xem=$view,ma_loai=$loai WHERE ma_hh=$mahh";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location:showsp.php?message=sửa dữ liệu thành công");
    die;
}
//SQL lấy dữ liệu bảng loại hàng
$sql = "SELECT * FROM loai";
$stmt = $conn->prepare($sql);
$stmt->execute();
$danhmuc = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Lấy ra mã của sản phẩm muốn sửa trên URL
$mahh = $_GET['ma_hh'];
$sql = "SELECT * FROM hang_hoa WHERE ma_hh=$mahh";
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
    <title>sửa sản phẩm</title>
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
        <h1>sửa sản phẩm</h1>
    </div>
    <div class="form">
        <form action="edithh.php?ma_hh=<?=$sp['ma_hh'] ?>" method="post" enctype="multipart/form-data">
            <div class="product_id">
                <input type="hidden" name="ma_hh" value="<?=$sp['ma_hh'] ?>">
            </div>
            <div class="product_name">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="ten_hh" placeholder="Tên sản phẩm" value="<?=$sp['ten_hh'] ?>">
            </div>
            <div class="Description">
                <label for="">Đơn giá</label>
                <input type="text" name="don_gia" placeholder="giá sản phẩm" value="<?=$sp['don_gia'] ?>">
            </div>
            <div class="price">
                <label for="">Giảm giá</label>
                <input type="number" name="giam_gia" min=1 step="1" value="<?=$sp['giam_gia'] ?>">
            </div>
            <div class="images">
                <label for="">chọn ảnh </label>
                <input id="image" type="file" name="anh" >
                <br>
                <img src="../images/<?=$sp['hinh'] ?>" width="120" alt="">
                <input type="hidden" name="anh" value="<?=$sp['hinh'] ?>">
            </div>
            <div class="price">
                <label for="">Ngày nhập</label>
                <input type="date" name="ngay_nhap" min=1 step="1" value="<?=$sp['ngay_nhap'] ?>">
            </div>
            <div class="price">
                <label for="">Mô tả</label>
                <input type="text" name="mo_ta" min=0 step="1" value="<?=$sp['mo_ta'] ?>">
            </div>
            <div class="price">
                <label for="">Đặc biệt</label>
                <input type="number" name="dac_biet" min=0 step="1" value="<?=$sp['dac_biet'] ?>">
            </div>
            <div class="price">
                <label for="">Lượt xem</label>
                <input type="number" name="so_luot_xem" min=0 step="1" value="<?=$sp['so_luot_xem'] ?>">
            </div>
            <div class="category">
                <label for="">Mã loại</label>
                <select name="ma_loai" id="">
                    <?php foreach ($danhmuc as $dm) : ?>
                        <?php if ($dm['ma_loai'] ==$sp['ma_loai']) : ?>
                            <option selected value="<?=$dm['ma_loai'] ?>">
                                <?= $dm['ten_loai'] ?>
                            </option>
                        <?php else : ?>
                            <option value="<?=$dm['ma_loai'] ?>">
                                <?= $dm['ten_loai'] ?>
                            </option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
            </div>
           
            <br>
            <div class="btn">
                <button type="submit">Lưu lại</button>
            </div>
        </form>
    </div>
</body>

</html>