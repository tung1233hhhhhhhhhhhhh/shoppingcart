<?php
session_start();
require '../../admin/database.php';
ob_start();
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
    <link rel="stylesheet" href="../../bootstrap/bootstrap-4.0.0/dist/css/bootstrap.css">

</head>
<style>
    .box {
        width: 50%;
        height: 10rem;
        background-color: #59b1f9;
        border: 1px solid #Ccc;
        border-radius: 10px;
        margin: 0 auto;
    }

    .text {
        font-size: 2rem;
        text-align: center;
        line-height: 10rem;
    }
</style>
<body>
            <?php

        if (isset($_SESSION['user'])) {
            if (isset($_SESSION['cart'])) {
                // Xử lý giỏ hàng ở đây (nếu cần)
            }
        } else {
            ?>
            <div class="box">
                <div class="text">Bạn cần đăng nhập để mua hàng</div>
            </div>
            <?php
            // Đợi một thời gian ngắn trước khi thực hiện chuyển hướng
            ob_flush();
            flush();
            sleep(2);
            
            // Thực hiện chuyển hướng đến trang đăng nhập
            header('Location: ../../view/user/login.php');
            exit; // Cần kết thúc kịch bản sau khi thực hiện chuyển hướng
        }
        ?>

</body>
</html>

