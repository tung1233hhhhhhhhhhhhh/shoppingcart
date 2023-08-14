<?php
session_start();
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
    <link rel="stylesheet" href="./components/css/breadcrumb.css">


</head>


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = $conn->prepare("SELECT * FROM product WHERE id = :id");
    $sql->bindParam(':id', $id, PDO::PARAM_INT);
    $sql->execute();
    $row = $sql->fetch();

}
?>

<body>
    <div id="header">
        <div class="container">
        <?php include './components/nav.php';?>
        </div>
    </div>

    <div class="product-details">
        <div class="container">
            <div class="text-heading">
                <a href="../../index.php">Trang Chủ</a> /
                <a href="./sanpham.php">Products</a> /
                <?php echo $row['name_sp'];?>
            </div>
            <div class="product-main">
                <img src="../../admin/view/uploads/<?php echo $row['img'];?>" alt="">
                <div class="product-content">
                    <p class="name-product"><?php echo $row['name_sp'];?></p>
                    <div class="price-product">
                    <?php echo $row['price'];?> đ
                    </div> 
                 
                    <form action="./reg.php" method="post" class="variant-sizguide">
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
                            <select name="soluong" id="">
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

                    <button class="btn-buy" type="submit" name="add-product">Thêm Vào Giỏ</button>
                </div>
            </div>
        </div>
    </div>

    <?php
include './components/footer.php';
    ?>
</body>

</html>