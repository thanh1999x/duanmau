<?php
//include connection.php
require_once '../ketnoi.php';

//Câu lệnh select truy cập đến bảng sản phẩm
$sql = "SELECT * FROM loai ORDER BY ma_loai DESC";

//Chuẩn bị
$stmt = $conn->prepare($sql);

//Thực thi
$stmt->execute();

//Lấy dữ liệu
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        .loai{
            border:2px #ff0000;
        }
     .background{
    border: 1px solid #ff0000;
    background-color: rgb(121, 203, 228);
    width: 1500px;
    height: 1000px;
}
.ds{
    color: red;
    margin-left: 100px;
    font-size: 40px;
}

    </style>
</head>

<body>
   <div class="background">
       <h1 class="ds">Danh sách loại hàng có trong kho</h1>
    <div class="loai">
    <table style="width: 1500px;">
        <tr> 
            <th>Mã hàng hóa</th> 
            <th>Tên hàng</th>
            <th>
                <a href="addloaihang.php">Thêm</a>
            </th>
            <br>
         
        </tr>
        
        <?php foreach ($result as $sp) : ?>
            <tr>
                <td class="maloai" style="border: 1px solid #cdcdcd; border-radius: black; height: 50px;"><?=$sp['ma_loai'] ?></td>
                <td class="maloai" style="border: 1px solid #cdcdcd; border-radius: black; height: 50px;"><?= $sp['ten_loai'] ?></td>
                <th>
                    <a href="editlh.php?ma_loai=<?= $sp['ma_loai'] ?>">Sửa</a>            
              </th>
              <th>
              <a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="deletelh.php?ma_loai=<?=$sp['ma_loai'] ?>">Xóa</a>
              </th>
            </tr>
        <?php endforeach ?>
    </table>
    <div class="checkbox"style="margin-top: 30px">
    <a href="#"  style="color: white; border-radius: 10px; background-color: green;" id="btn1">Check all</a>
            <a href="#"  style="color: white; border-radius: 10px; background-color: green;" id="btn2">Uncheck all</a>
            <button type="submit" style="color: white; border-radius: 10px; background-color: red;">Delete</button>

    </div>
    </div>
    </div>
</body>

</html>