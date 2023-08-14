
<?php
    session_start();
// ket noi db
    require './admin/database.php';
    $sql = 'SELECT * FROM Product';
    $result = $conn->query($sql);
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
        <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css"/>
        <link rel="stylesheet" href="./assets/css/home.css"/>
      <!-- <link rel="stylesheet" href="./bootstrap/bootstrap-4.0.0/dist/css/bootstrap.css"> -->

</head>

<style>

.nav .navbar {
    z-index: 2;
}

.swiper img {
    width: 100%;
}

.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}


#header-top {
    background-color: #07a64ef5;

}

#header-top .container{
    display: flex;
    flex-direction: row;
    padding: 1rem;
    justify-content: flex-end;
}
.btn-login {
    padding: 2rem;
}
    </style>


<body>

    <div id="header-top">
        <div class="container">
            <?php 
                if (!isset($_SESSION['user'])) { ?>
                    <a href="./view/user/login.php"><button type="button" class="btn-login">Đăng nhập</button></a>
                    <a href="./view/user/signup.php"> <button type="button" class="btn-signup">Đăng KÝ</button></a>
                    <?php }else{ ?>
                     <p>Xin Chào: 
                        <?php foreach ($_SESSION['user'] as $user) {
                            if (isset($user['name'])) {
                                echo $user['name'];
                            }
                        } ?>
                    </p>
                    <a href="./view/user/logout.php"><button type="submit" name="logout">Đăng Xuất</button></a>

               <?php } ?>
           
          
               
        </div>
    </div>
    <?php
        include './components/header.php';
        include './components/category.php';
        include './components/collectionHeading.php';
        include './components/collection.php';
        include './components/footer.php';
    ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<script src="./js/sliderSwiper.js"></script>






</body>

</html>