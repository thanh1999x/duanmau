<?php
require_once './ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./filecssadmin/admin.css">
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
    </style>
</head>
<body>
  <div class="wapper">
    <header class="header">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/banner-la-gi.jpg" alt="First slide" width="1700px" height="300px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/banner-quang-cao-dien-thoai_103211774.jpg" alt="Second slide" width="1700px" height="300px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/hqdefault.jpg" alt="Third slide" width="1700px" height="300px">
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
            <li><a href="../user/showuser.php">Trang ch???</a></li>
            <li><a href="../admin/showadmin.php">Admin</a></li>
            
         </ul>
         <form action=" " class="form">
                <input type="seach" required placeholder = "t??m ki???m ??i" class="fomr1">
                <input type="submit" value="T??m ki???m" class="hi3">

            </form>
    </nav>
    <div class="conten">
      <div class="conten-right" style="width: 200px;">
              <div class="hang" style="list-style: none; margin-left: 40px; color: white; margin-top:30px; width: 150px;">
              <a href="./hanghoa/showsp.php">H??ng h??a</a>
              </div>
              <div class="hang" style="list-style: none; margin-left: 40px; color: white; margin-top:30px; width: 150px;">
              <a href="./loaihang/showlh.php">Lo???i h??ng</a>
              </div>
              <div class="hang" style="list-style: none; margin-left: 40px; color: white; margin-top:30px; width: 150px;">
              <a href="./khachhang/showkh.php">Kh??ch h??ng</a>
              </div>
              <div class="hang" style="list-style: none; margin-left: 40px; color: white; margin-top:30px; width: 150px;">
              <a href="./binhluan/showbl.php">B??nh lu???n</a>
              </div>
              <div class="hang" style="list-style: none; margin-left: 40px; color: white; margin-top:30px; width: 150px;">
              <a href="./thongke/bieudo.php">Th???ng k??</a>
              </div>

      </div>
      <div class="conten-main" style="width: 1500px;">
      <h1 style="color: red; margin-top: 100px; margin-left: 500px;">Ch??o anh th??nh ?????p trai hehe</h1>
      <h3 style="color: red; margin-left: 600px;">Ch???n ch???c n??ng b??n tr??i nha</h3>
      <h6 style="color: red; margin-left: 1200px; margin-top: 300px; font-size: 10px;">Sai r???i b??n trai kia c?? m??</h6>
      <div style="margin-left: 500px; margin-top: -320px;">
      <i class="fa-solid fa-arrow-right fa-10x"></i>  <i class="fa-solid fa-arrow-right fa-10x"></i><i class="fa-solid fa-arrow-right fa-10x"></i>
      </div>
      <div class="ae" style="margin-left: 1160px; margin-top: 135px;">
      <i class="fa-solid fa-arrow-left-long "></i>
      </div>
        
      </div>
    </div>
    <footer class="footer">
      <h2 class="hat2" style="font-size: 50px; margin-left: 650px; color: red;">Th??ng tin li??n h???</h2>
     <a href="">
     <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Ch??nh s??ch b??n h??ng</h3>
     </a>
      <a href="">
      <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Ch??nh s??ch ??u ????i</h3>
      </a>
      <a href="">
      <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Ch??nh s??ch b???o h??nh</h3>
      </a>
      <a href="">
      <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Ch??nh s??ch ?????i tr??? h??ng</h3>
      </a>
      <a href="">
     <h3 class="chinhsach" style="margin-left: 100px; color: blue; font-size: 20px; margin-top: 20px;">Ch??nh s??ch giao h??ng</h3>
     </a>

        <h4 class="lienhe" style=" margin-left: 430px; margin-top: -170px;">Xu??n ph????ng- Nam t??? li??m-H?? N???i</h4>
        <h4 class="lienhe1" style="margin-left: 430px; margin-top: -77px;">Hotline : 0916500351 | D?? : 0868635426</h4>
        <h4 class="lienhe2" style="margin-left: 430px; color: red; margin-top: 60px;">T???ng ????i h??? tr??? tr???c ti???p <a href="">0916500351</a></h4>
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
         <img src="./images/t???i xu???ng.png" alt="" width="250px" height="100px">
       </div>
       <div>
       <h4 class="diachi" style="margin-left: 1300px; margin-top: -235px;">?????a ch???</h4>
       <iframe class="map"style="width:500px; height: 250px; margin-left: 1100px; margin-top; -200px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.566822755008!2d105.73087421453319!3d21.050011685986778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345458ee3d67ef%3A0x57dea4066941842!2zTmcuIDgwIMSQLiBYdcOibiBQaMawxqFuZywgTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1653409227937!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
