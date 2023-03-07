<?php
// kết nối với sql 
// tên sever 
$host = 'localhost';
// tên csdl 
$dbname = 'duanmau';
// tên truy cập
$username = 'root';
// passwprd 
$password = '';
try {
    $conn = new  PDO("mysql:host =$host;dbname=$dbname;charset=utf8",$username,$password);
    //echo"kết nối thành công";
} catch (PDOException $e) {
    echo"kết nối thất bại <br>".$e->getMessage();
}
?>