<?php
session_start();
require '../../admin/database.php';
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gajraj+One&family=Noto+Sans+Bamum&family=Noto+Sans+Mongolian&family=Oleo+Script:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet"/>
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="../../assets/fonts/themify-icons/themify-icons.css"/>
        <link rel="stylesheet" href="../../assets/css/home.css"/>
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
<body>

<div id="header">
    <div class="container">
    <?php include './components/nav.php';?>
    </div>
</div>

<?php
$name = $_GET['name'];

$param=['name'=>$name];
extract($param);
include './components/breadcrumb.php';

?>

<div id="collection">
        <div class="container">
            
            <div class="collection-content">
                <div class="collection-content_container">

                <?php

                    $sql =$conn->prepare("SELECT * FROM product where name_category =:name");
                    $sql->bindParam(':name',$name);
                    $sql->execute();
                    
                    while ($row =$sql->fetch()) {
                   
                ?>
                    <a href="productdetails.php?id=<?php echo $row['id']; ?>" class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="../../admin/view/uploads/<?php echo $row['img']?>" alt="">
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
                    <a href="" class="xemthem">Xem Thêm
                        <i class="ti-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
include './components/footer.php';


?>





</body>
</html>

