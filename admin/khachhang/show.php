<?php
//include connection.php
require_once '../ketnoi.php';

//Câu lệnh select truy cập đến bảng sản phẩm
$sql = "SELECT * FROM khach_hang ORDER BY ma_kh DESC";

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
    <title>Danh sách khách hàng</title>
    <style>

        .add{
            color:white;
            font-size: 35px;
        }
        .bang{
            background-color: white;
            width: 670px;
        }
        .bang1{
            margin-right: 200px;
        }

    </style>
</head>

<body>
   <div class="bang">
    <table border="1" >
        <tr>           
           
            <th>Mã khách hàng</th> 
            <th>Họ tên</th>
            <th>Mật khẩu</th>
            <th>Trạng thái</th>
            <th>Ảnh</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>
                <a href="addkh.php">Thêm</a>
            </th>
        </tr>
        <?php foreach ($result as $sp) : ?>
            <div class="bang1">
            <tr>
              
                <td><?=$sp['ma_kh'] ?></td>
                <td><?= $sp['ho_ten'] ?></td>
                <td><?= $sp['mat_khau'] ?></td>
                <td><?= $sp['trang_thai'] ?></td>
                <td>
                    <img src="../images/<?=$sp['hinh']?>" width="123" alt="">
                </td>
                <td><?= $sp['email'] ?></td>
                <td><?= $sp['vai_tro'] ?></td>      
                <td>
                    <a href="editkh.php?ma_kh=<?=$sp['ma_kh'] ?>">Sửa</a>            
              </td>
              <th>
              <a onclick="return confirm('Bạn có chắc chắn xóa không?')"href="deletekh.php?ma_kh=<?=$sp['ma_kh'] ?>">Xóa</a>
              </th>
            </tr>
            </div>
        <?php endforeach ?>
    </table>
    </div>

</body>

</html>