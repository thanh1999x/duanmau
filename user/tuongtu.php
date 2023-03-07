<?php
require_once '../admin/ketnoi.php';
$sobanghi = 4;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
?>
<?php

?>
<style>
    .sp{
        border: 1px solid blue; 
        width: 150px;float: left; 
        text-align: center; 
        margin-left: 20px; 
        height: 250px;
         margin-top: 50px;
    }
    .title{
        margin-left: 120px;
         margin-top: 10px;
          font-size: 30px;
           color: yellow;
    }
    .name1{
        color: red;
         font-size: 15px;
    }
    .giam_gia1{
        color: red; 
        font-size: 15px;
    }
    .gia1{
        color: rgb(15, 208, 28);
         font-size: 15px;
    }
</style>
<div class="title">Sản phẩm tương tự </div>
<div class="giohang">
<?php
        $nhap = ($page-1)*$sobanghi;
        $sql = "SELECT * FROM hang_hoa where ma_loai = $maloai ORDER BY ma_hh  ASC LIMIT $nhap,$sobanghi";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($product as $dm):?>
         <div class="sp">
        <h2 class="name1"><?=$dm['ten_hh']?></h2>
        <h3 class="gia1"><?=number_format($dm['don_gia'],0,",",".")?></h4>
       <a href="../user/chitiet.php?ma_hh=<?=$dm['ma_hh']?>"> <img src="../admin/images/<?=$dm['hinh']?>" alt="" width="80px" height="100px"></a>
        <h4 class="giam_gia1"><?= - $dm['giam_gia']?>%</h4>
        <a href="../user/chitiet.php?ma_hh=<?=$dm['ma_hh']?>"> <button type="submit"style="background-color: rgb(223, 154, 26); border-radius: 10px">chi tiết</button></a>
         </div>
        <?php endforeach ?> 

</div>
