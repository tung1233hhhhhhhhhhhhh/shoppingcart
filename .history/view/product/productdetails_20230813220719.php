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
<style>
    .nav-top {
    height: 7rem;
}
.nav-top .logo-header img {
    width: 13rem;
}
</style>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = $conn->prepare("SELECT * FROM product WHERE id = :id");
    $sql->bindParam(':id', $id, PDO::PARAM_INT);
    $sql->execute();
    if ($row = $sql->fetch()) {
        $name_sp = $row['name_sp'];
        $price = $row['price'];
    } else {
        echo "Không tìm thấy sản phẩm.";
    }
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
                <?php echo $name_sp;?>
            </div>
            <div class="product-main">
                <img src="../../admin/view/uploads/<?php echo $row['img'];?>" alt="">
                <div class="product-content">
                    <p class="name-product"><?php echo $name_sp;?></p>
                    <div class="price-product">
                    <?php echo $price ;?> đ
                    </div> 
                 
                    <form action="shoppingcart.php?id=<?php echo $row['id']; ?>" method="post" >
                    
                       <div  class="variant-sizguide">
                       <div class="size-product">
                            <label for="">Kích Thước</label>
                            <select class="select-size" name="size">
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">Xl</option>
                            </select>
                        </div>
                        <div class="quantity-product">
                            <label for="">Số Lượng</label>
                            <select name="soluong" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                       </div>
                       
                    <button class="btn-buy" type="submit" name="add-product">Thêm Vào Giỏ</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php
include './components/footer.php';
    ?>
</body>

</html>