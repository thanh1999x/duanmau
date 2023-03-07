<?php
require_once '../admin/ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../admin/filecssadmin/chitiet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .map{
        width: 200px;
        height: 200px;
      }
      .formadd{
            margin-left: 500px;
        }
        .add{
            color: green;
            font-size: 35px;

        }
        .hang:hover{
          background-color: white;
        }
        .conten{
          display: flex;
        }
        .content-main{
          width: 1200px;
          height: 1000px;
          background-color: bisque;
        }
        .content-right{
          width: 500px;
          height: 1000px;
          background-color: violet;
        }
        .theh2{
          color: red;
          margin-left: 400px;
          margin-top: 30px;
        }
    </style>
</head>
<body>
  <div class="wapper">
    <header class="header">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../admin/images/banner-la-gi.jpg" alt="First slide" width="1700px" height="300px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../admin/images/banner-quang-cao-dien-thoai_103211774.jpg" alt="Second slide" width="1700px" height="300px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../admin/images/hqdefault.jpg" alt="Third slide" width="1700px" height="300px">
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
            
         </ul>
         <form action=" " class="form">
                <input type="seach" required placeholder = "tìm kiếm đi" class="fomr1">
                <input type="submit" value="Tìm kiếm" class="hi3">

            </form>
    </nav>
    <div class="conten">
      <div class="content-main">
        <h2 class="theh2">Chi tiết sản phẩm</h2>
        <?php
        require_once './showctiet.php';
        ?>
        
        
      </div>
      <div class="content-right">
        <?php 
        require_once './tuongtu.php';
        ?>
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
       <div class="cong" style="margin-left: 750px; margin-top: -45px;">
         <img src="../admin/images/tải xuống.png" alt="" width="250px" height="100px">
       </div>
       <div>
       <h4 class="diachi" style="margin-left: 1300px; margin-top: -235px;">Địa chỉ</h4>
       <iframe class="map"style="width:500px; height: 250px; margin-left: 1100px; margin-top; -200px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.566822755008!2d105.73087421453319!3d21.050011685986778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345458ee3d67ef%3A0x57dea4066941842!2zTmcuIDgwIMSQLiBYdcOibiBQaMawxqFuZywgTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1653409227937!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>