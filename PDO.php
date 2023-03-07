<?php
require_once '../ketnoi.php';
function addsp($sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location: admin.php?message=Thêm dữ liệu thành công");
    exit;



    
}
?>
