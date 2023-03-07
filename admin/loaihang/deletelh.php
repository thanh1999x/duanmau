<?php
require_once '../ketnoi.php';
if(isset($_GET['ma_loai'])){
    $hi=$_GET['ma_loai'];
    $sql="DELETE from loai where ma_loai=$hi";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    header('Location: showlh.php?');
    die;
}
?>