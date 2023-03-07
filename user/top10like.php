<?php
require_once '../admin/ketnoi.php';
$sobanghi = 2;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$sql = "SELECT * FROM hang_hoa WHERE ma_hh";
$stmt = $conn->prepare($sql);
$stmt->execute();
//Lấy 1 dòng dữ liệu
$sp = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="tieude1" style=" color: red; font-size: 30px;">Top 5 sản phẩm yêu thích nhất </div>
<?php
        $nhap = ($page-1)*$sobanghi;
        $sql = "SELECT * FROM hang_hoa ORDER BY so_luot_xem  desc LIMIT 5";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($product as $sp):?>
        <br>
        <br>
        <a href="./chitiet.php?ma_hh=<?=$sp['ma_hh']?>">
        <h2 class="name" style="color: red; font-size: 20px; margin-top: 10px; margin-left: 100px;"><?=$sp['ten_hh']?></h2>
        <div style=" margin-left: 110px;">
        <td>
            <img src="../admin/images/<?=$sp['hinh']?>" width="80px" alt="">
         </td>
        </div>
        </a>
        </a>
        <?php endforeach ?> 

</div>
