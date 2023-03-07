<?php
require_once '../ketnoi.php';

if (isset($_GET['ma_hh'])) {
    $ma = $_GET['ma_hh'];
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=$ma";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: showsp.php?message=Xóa dữ liệu thành công');
    die;
}
