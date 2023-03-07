<?php
//include connection.php
require_once '../ketnoi.php';

//Câu lệnh select truy cập đến bảng bình luận
$sql = "SELECT * FROM binh_luan ORDER BY ma_bl DESC";

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
    <title>Danh sách bình luận</title>
    <style>
        .formadd{
            margin-left: 500px;
        }
        .add{
            color: green;
            font-size: 35px;

        }
        .title{
            margin-left: 500px;
            color: red;
        }

    </style>
</head>

<body>
   <div class="backgroundz">
       <h1 class="title">Danh sách bình luận</h1>
    <table border="1" style="width: 1500px;">
        <tr>
            <th>Mã Bình luận</th> 
            <th>nội dung</th>
            <th>mã hàng hóa</th>
            <th>mã khách hàng</th>
            <th>ngày nhập</th>
            <th>
                <a href="addbl.php">Thêm</a>
            </th>

        </tr>
        <?php foreach ($result as $sp) : ?>
            <tr>
                <td><?=$sp['ma_bl'] ?></td>
                <td><?= $sp['noi_dung'] ?></td>
                <td><?= $sp['ma_hh'] ?></td>
                <td><?= $sp['ma_kh'] ?></td>
                <td><?= $sp['ngay_nhap'] ?></td>  

                <td>
                    <a href="editbl.php?ma_bl=<?=$sp['ma_bl'] ?>">Sửa</a>            
              </td>
              <th>
              <a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="deletebl.php?ma_bl=<?=$sp['ma_bl'] ?>">Xóa</a>
              </th>
            </tr>
        <?php endforeach ?>
    </table>
    </div>
</body>

</html>