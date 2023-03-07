<?php
require_once '../ketnoi.php';
$sobanghi = 5;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        .formadd{
            margin-left: 500px;
        }
        .add{
            color: green;
            font-size: 35px;

        }
        .h1{
            color: red;
            font-size: 50px;
            margin-left: 200px;
        }
            </style>
</head>

<body>
   <div class="backgroundn" style="width: 1500px;">
    <table border="1" style="width: 1500px;">
        <tr>
            <th>Mã hàng hóa</th> 
            <th>Tên hàng</th>
            <th>đơn giá</th>
            <th>giảm giá </th>
            <th>ảnh</th>
            <th>Ngày Nhập</th>
            <th>Mô tả</th>
            <th>Đặc biệt</th>
            <th>Số lượt xem</th>
            <th>mã loại sản phẩm</th>
            <th>
                <a href="them.php">Thêm</a>
            </th>

        </tr>
        
        <?php
        $hi = ($page - 1) * $sobanghi;
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh Desc LIMIT $hi,$sobanghi";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $hang = $stmt->fetchAll(PDO::FETCH_ASSOC);
         foreach ($hang as $sp) : ?>
            
            <tr>
            
                <td><?=$sp['ma_hh'] ?></td>
                <td><?= $sp['ten_hh'] ?></td>
                <td><?= $sp['don_gia'] ?></td>
                <td><?= $sp['giam_gia'] ?></td>
                <td>
                    <img src="../images/<?=$sp['hinh']?>" width="123" alt="">
                </td>
                <td><?= $sp['ngay_nhap'] ?></td>
                <td><?= $sp['mo_ta'] ?></td>
                <td><?= $sp['dac_biet'] ?></td>
                <td><?= $sp['so_luot_xem'] ?></td>
                <td><?= $sp['ma_loai'] ?></td>        
                <td>
                    <a href="edithh.php?ma_hh=<?=$sp['ma_hh'] ?>">Sửa</a>            
              </td>
              <th>
              <a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="deletesp.php?ma_hh=<?=$sp['ma_hh'] ?>">Xóa</a>
              </th>
            </tr>
        <?php endforeach ?>
    </table>
    </div>
    <div class="hi">
        <?php
        $g="SELECT ma_hh FROM hang_hoa ";
        $smt = $conn->prepare($g);
        $smt->execute();
        $pro = $smt->fetchAll(PDO::FETCH_ASSOC);
        $sum= count($pro);
        $pagesum = ceil($sum/$sobanghi); 
        for($i = 1; $i<=$pagesum;$i++){
        ?>
        <a style="border: 1px solid red; width: 20px; height: 20px;" href="showsp.php?page=<?=$i?>"><?=$i?></a>

    <?php } ?>
  
      </div>
</body>

</html>