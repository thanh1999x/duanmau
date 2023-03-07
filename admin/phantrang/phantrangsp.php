<?php
require_once './admin/ketnoi.php';
$sobanghi = 6;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
?>
      <div class="hi">
        <?php
        $g="SELECT ma_hh FROM hang_hoa";
        $smt = $conn->prepare($g);
        $smt->execute();
        $pro = $smt->fetchAll(PDO::FETCH_ASSOC);
        $sum= count($pro);
        $pagesum = ceil($sum/$sobanghi); 
        for($i = 1; $i<=$pagesum;$i++){
        ?>
        <a style="border: 1px solid red; " href="showuser.php?page=<?=$i?>"><?=$i?></a>

    <?php } ?>
  
      </div>