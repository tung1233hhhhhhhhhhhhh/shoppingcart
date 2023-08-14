<?php 
require '../../admin/database.php';
?>



<div class="breadcrumb">
    <ul class="container">
        <li class="text-top">
            <a href="../../index.php">Trang Chủ</a> / <?php echo $name ?>
        </li>
        <li class="text-main"><?php echo $name ?></li>
        <li class="text-bottom">
            Danh Mục
            <i class="ti-angle-down"></i>
            <ul class="breadcrumb-list">
        <?php

            $sql =$conn->query("SELECT * FROM category");
            $sql->execute();

            while ($row=$sql->fetch()) {
        ?>
                  <li><a href="./product-ao.php?name=<?php echo  $row['name_category'] ; ?>"><?php echo $row['name_category'] ?></a></li>

          <?php  } ?>


            </ul>
        </li>
    </ul>
</div>