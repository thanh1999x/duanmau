<?php
require_once '../ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['ten'];
    $price = $_POST['dongia'];
    $sale = $_POST['giamgia'];
    $date = $_POST['ngaynhap'];
    $text = $_POST['mota'];
    $dacbiet = $_POST['dacbiet'];
    $number = $_POST['luotxem'];
    $maloai = $_POST['maloai'];
    $anh = $_FILES['anh']['name'];
    if($_FILES['anh']['size'] >0){
        $anh=$_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'],'../images/'.$anh );
    }
    $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,giam_gia,hinh,ngay_nhap,mo_ta,dac_biet,so_luot_xem,ma_loai) VALUES('$name','$price','$sale','$anh','$date','$text','$dacbiet','$number','$maloai')";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header("Location: showsp.php?message=Thêm dữ liệu thành công");
    die;
  
}
$sql = "SELECT * FROM loai";
$stmt = $conn->prepare($sql);
$stmt->execute();
$danhmuc = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../filecssadmin/filethem.css">
    <title>Thêm user</title>
    <style>
    
    </style>
</head>

<body>
    <div class="khung">
    <div class="tieude">
        <h1>Thêm Hàng hóa</h1>
    </div>
    <div class="form">
        <form action="them.php" method="post" enctype="multipart/form-data">
            <div class="ten_hang" style="padding-left: 15px; text-align: center;">
                <label for="">Tên hàng</label>
                <input type="text" name="ten" placeholder="Tên hàng">
            </div>
            <div class="don_gia" style="padding-left: 15px; text-align: center;">
                <label for="">Đơn giá</label>
                <input type="number" name="dongia" >
            </div>
            <div class="giam_gia"style="padding-left: 15px; text-align: center;">
                <label  for="">Giảm giá</label>
                <input type="number" name="giamgia" >
            </div>
            <div class="file" style="padding-left: 15px; text-align: center;">
            <label class="chu" for="">ảnh</label>
            <input type="file" name="anh" id="">
            <div class="ngaynhap"style="padding-left: 15px; text-align: center;">
                <label for="">Ngày nhập</label>
                <input type="date" name="ngaynhap" >
            </div>
            <div class="mo_ta" style="padding-left: 15px; text-align: center;">
                <label for="">Mô tả</label>
                <input type="text" name="mota" >
            </div>
            <div class="dac_biet" style="padding-left: 15px; text-align: center;">
                <label for="">Đặc biệt</label>
                <input type="number" name="dacbiet" >
            </div>
            <div class="luotxem" style="padding-left: 15px; text-align: center;">
                <label for="">Số lượt xem</label>
                <input type="number" name="luotxem" >
            </div>
            <div class="loaihang" style="padding-left: 15px; text-align: center;">
                <label for="">Mã loại</label>
                <select name="maloai" id="">
                    <?php foreach ($danhmuc as $dm) : ?>
                        <option value="<?=$dm['ma_loai'] ?>">
                            <?=$dm['ten_loai'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
         
            
            <br>
            <div class="btn">
                <button type="submit">Lưu lại</button>
            
        </form>
    </div>
    </div>
</body>

</html>