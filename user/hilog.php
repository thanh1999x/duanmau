<?php
require '../admin/ketnoi.php';
if(isset($_POST['dangnhap']) == true){
  $ten = $_POST['ten'];
  $matkhau = $_POST['matkhau'];
  $sql= "SELECT * FROM khach_hang";
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $show=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $hoten=$show['ho_ten'];
  $pass=$show['mat_khau']; 
  if($ten==$hoten && $matkhau==$pass){
    header('location : ./user/showuser.php?');
    die;
  }else{
    header('location : loginuser.php?');
    die;
  }
}
?>