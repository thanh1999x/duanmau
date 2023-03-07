<?php
require '../admin/ketnoi.php';
$ma_hh = $_GET['ma_hh'];
$sql = "SELECT * FROM hang_hoa WHERE ma_hh=$ma_hh";
$stmt = $conn->prepare($sql);
$stmt->execute();
//Lấy 1 dòng dữ liệu
$sp = $stmt->fetch(PDO::FETCH_ASSOC);
$maloai=$sp['ma_loai'];
?>
<style>
    .sanpham{
        margin-left: 100px;
    }
    .ten{
        font-size: 35px;
    }

</style>
<div class="sanpham">
    <img style="width: 300px; height: 200px;" src="../admin/images/<?=$sp['hinh']?>" alt="">
    <div class="ten">
        Tên sản phẩm : <h2 class="name" style="color: red;"><?=$sp['ten_hh']?></h2>
    </div>
    <div class="gia">
        Giá hàng hóa: <h5 class="gia" style="color: rgb(15, 208, 28);"><?=number_format($sp['don_gia'],0,",",".")?> VND</h5>    
    </div>
    <div class="giam_gia">
        Sản phẩm được giảm giá :<h5 class="giam_gia" style="color: red;"><?= - $sp['giam_gia']?>%</h5>
    </div>
    <div class="mo_ta" style="width: 90%; font-size: 25px;">
        Sản phẩm có :<?=$sp['mo_ta']?>
    </div>
    <a href="./giohang.php">
    <button style="border-radius: 10px; background-color: red; color: white; margin-top: 30px;">Mua ngay</button>
    </a>

</div>
