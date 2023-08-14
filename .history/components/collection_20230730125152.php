<?php
    require './admin/database.php';
?>

<div id="collection">
        <div class="container">
            
            <div class="collection-content">
                <div class="collection-content_container">

                <?php

                    $sql =$conn->query("SELECT * FROM product");

                    $sql->execute();
                    
                    while ($row =$sql->fetch()) {
                   
                ?>
                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./admin/uploads/<?php echo $row['img']?>" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>

                    <?php }?>
                    

                </div>
                <div class="collection-content_btn">
                    <a href="" class="xemthem">Xem Thêm
                        <i class="ti-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>