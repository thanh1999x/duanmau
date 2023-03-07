<?php
require_once '../admin/ketnoi.php';
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
    <title>show ipad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin/menu.css">
   
    <style>
      .map{
        width: 200px;
        height: 200px;
      }
      .sanpham:hover{
        border-radius: 20px;
        box-shadow:10px burlywood;
        width:320px;
        height:420px;
      }
    </style>
</head>
<body>
  <div class="wapper">
    <header class="header">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../admin/images/banner-la-gi.jpg" alt="First slide" height="300px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../admin/images/banner-quang-cao-dien-thoai_103211774.jpg" alt="Second slide" height="300px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../admin/images/hqdefault.jpg" alt="Third slide" height="300px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </header>
    <nav class="nav-main">
        <ul>
            <li><a href="../user/showuser.php">Trang chủ</a></li>
            <li><a href="./dienthoai.php">Điện thoại</a></li>
            <li><a href="./laptop.php">Laptop</a></li>
            <li><a href="./ipad.php">Ipad</a></li>
            <li><a href="./smartwatch.php">Smartwatch</a></li>
            <li><a href="./loa.php">Loa</a></li>
            <li><a href="./giohang.php">Giỏ hàng của bạn</a></li>
            <li><a href="#">Đăng nhập</a></li>
            
         </ul>
         <form action=" " class="form">
                <input type="seach" required placeholder = "tìm kiếm đi" class="fomr1">
                <input type="submit" value="Tìm kiếm" class="hi3">

            </form>
    </nav>
    <div class="conten">
     
      <?php
        $nhap = ($page-1)*$sobanghi;
        $sql = "SELECT * FROM hang_hoa where ma_loai=4 LIMIT $nhap,$sobanghi";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($product as $sp):?>
         <div class="sanpham" style="border: 1px solid blue; width: 300px;float: left; text-align: center; margin-left: 20px; height: 400px; margin-top: 100px;">
        <h2 class="name" style="color: red;"><?=$sp['ten_hh']?></h2>
        <h3 class="gia" style="color: rgb(15, 208, 28);"><?=number_format($sp['don_gia'],0,",",".")?></h4>
       <a href="../user/chitiet.php?ma_hh=<?=$sp['ma_hh']?>"> <img src="../admin/images/<?=$sp['hinh']?>" alt="" width="250px" height="200px"></a>
        <h4 class="giam_gia" style="color: red;"><?= - $sp['giam_gia']?>%</h4>
        <a href="../user/chitiet.php?ma_hh=<?=$sp['ma_hh']?>"> <button type="submit"style="background-color: rgb(223, 154, 26); border-radius: 10px">chi tiết</button></a>
         </div>
        <?php endforeach ?> 

      <div class="hi">
        <?php
        $g="SELECT ma_loai FROM loai";
        $smt = $conn->prepare($g);
        $smt->execute();
        $pro = $smt->fetchAll(PDO::FETCH_ASSOC);
        $sum= count($pro);
        $pagesum = ceil($sum/$sobanghi);
        for($i = 1; $i<=$pagesum;$i++){
        ?>
        <a style="border: 1px solid red;" href="ipad.php?page=<?=$i?>"><?=$i?></a>

        <?php } ?>
  
    </div>
    </div>

    
    <footer class="footer">
      <h2 class="hat2" style="font-size: 50px; margin-left: 650px; color: red;">Thông tin liên hệ</h2>
     <a href="">
     <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Chính sách bán hàng</h3>
     </a>
      <a href="">
      <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Chính sách ưu đãi</h3>
      </a>
      <a href="">
      <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Chính sách bảo hành</h3>
      </a>
      <a href="">
      <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Chính sách đổi trả hàng</h3>
      </a>
      <a href="">
     <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Chính sách giao hàng</h3>
     </a>

        <h4 class="lienhe" style=" margin-left: 430px; margin-top: -170px;">Xuân phương- Nam từ liêm-Hà Nội</h4>
        <h4 class="lienhe1" style="margin-left: 430px; margin-top: -77px;">Hotline : 0916500351 | DĐ : 0868635426</h4>
        <h4 class="lienhe2" style="margin-left: 430px; color: red; margin-top: 60px;">Tổng đài hỗ trợ trực tiếp <a href="">0916500351</a></h4>
       <div class="icon" style="margin-left: 430px; margin-top: 10px;">
       <a href=""><i class="fa-brands fa-facebook fa-3x " ></i></a>
       </div>
       <div class="is" style="margin-left: 510px; margin-top: -45px;">
         <a href=""><i class="fa-brands fa-instagram-square fa-3x"></i></a>
       </div>
       <div class="tw" style="margin-left: 580px; margin-top: -50px;">
         <a href=""><i class="fa-brands fa-twitter fa-3x"></i></a>
       </div>
       <div class="cong" style="margin-left: 750px; margin-top: 100px;">
         <img src="../admin/images/tải xuống.png" alt="" width="250px" height="100px">
       </div>
       <div>
       <h4 class="diachi" style="margin-left: 1300px; margin-top: -280px;">Địa chỉ</h4>
       <iframe class="map"style="width:500px; height: 250px; margin-left: 1100px; margin-top; -290px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.566822755008!2d105.73087421453319!3d21.050011685986778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345458ee3d67ef%3A0x57dea4066941842!2zTmcuIDgwIMSQLiBYdcOibiBQaMawxqFuZywgTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1653409227937!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </footer>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
