<?php
require_once '../ketnoi.php';

if (isset($_GET['ma_bl'])) {
    $ma= $_GET['ma_bl'];
    $sql = "DELETE FROM binh_luan WHERE ma_bl=$ma";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: showbl.php?message=Xóa dữ liệu thành công');
    die;
}
