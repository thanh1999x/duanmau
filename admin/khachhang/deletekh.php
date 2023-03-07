<?php
require_once '../ketnoi.php';

if (isset($_GET['ma_kh'])) {
    $makh = $_GET['ma_kh'];
    $sql = "DELETE FROM khach_hang WHERE ma_kh=$makh";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: showkh.php?message=Xóa dữ liệu thành công');
    die;
}
?>
