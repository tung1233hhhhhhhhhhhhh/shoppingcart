<?php
require '../../admin/database.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/productdetails.css">
    <link rel="stylesheet" href="../../bootstrap/bootstrap-4.0.0/assets/css/docs.min.css">
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="../../assets/fonts/themify-icons/themify-icons.css"/>

</head>


<body>
    <div id="header">
        <div class="container">
        <?php include './components/nav.php';?>
        </div>
    </div>

    <div class="product-details">
        <div class="container">
            <div class="text-heading">
                <a href="">Trang Chủ</a> /
                <a href="">Products</a> /
                HARD MODE BASIC TEE
            </div>
            <div class="product-main">
                <img src="../../assets/imgs/ao.png" alt="">
                <div class="product-content">
                    <p class="name-product">HARD MODE BASIC TEE</p>
                    <div class="price-product">
                        79.000 đ
                    </div> 
                 
                    <form action="" method="" class="variant-sizguide">
                        <div class="size-product">
                            <label for="">Kích Thước</label>
                            <select class="select-size">
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">Xl</option>
                            </select>
                        </div>
                        <div class="quantity-product">
                            <label for="">Số Lượng</label>
                            <select name="" id="">
                                <option value=""></option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                            </select>
                        </div>
                    </form>

                    <button class="btn-buy">Thêm Vào Giỏ</button>
                </div>
            </div>
        </div>
    </div>

    <?php
include './components/footer.php';
    ?>
</body>

</html>