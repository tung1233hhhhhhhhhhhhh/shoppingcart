<?php
    require './admin/database.php';
?>


<div id="collection">
        <div class="container">
            
            <div class="collection-content">
                <div class="collection-content_container">

                <?php
                    $limit = 8;
                    $sql =$conn->query("SELECT * FROM product LIMIT $limit");

                    $sql->execute();
                    
                    while ($row =$sql->fetch()) {
                   
                ?>
                    <a href="./view/product/productdetails.php?id=<?php echo $row['id']; ?>" class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./admin/view/uploads/<?php echo $row['img']?>" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p><?php echo $row['name_sp'] ?></p>
                            <p style="font-weight: 600;
    color: #ff00009e;"><?php echo $row['price'] ?> đ</p>
                        </div>
                    </a>

                    <?php }?>
                    

                </div>
                <div class="collection-content_btn">
                    <a href="./view/product/sanpham.php" class="xemthem">Xem Thêm
                        <i class="ti-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>