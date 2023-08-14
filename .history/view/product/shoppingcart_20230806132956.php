<?php
session_start();
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
        <link rel="stylesheet" href="../../bootstrap/bootstrap-4.0.0/assets/css/docs.min.css">
        <link rel="stylesheet" href="../../assets/fonts/themify-icons/themify-icons.css"/>
        <link rel="stylesheet" href="../../assets/css/home.css"/>

</head>

<style>
    /* li {
        list-style: none;
    } */

    /* a {
        text-decoration: none;
    } */

    .breadcrumb {
        margin-top: 1rem;
        display: flex;
        flex-direction: column;
    }

    .breadcrumb .container {
        margin: 0 9rem;
        padding: 0 2rem;
    }

    .breadcrumb .container .text-top a {
        color: #ccc;
    }

    .breadcrumb .container .text-top a:hover {
        color: black;
        transition: .2s linear;
    }

    .breadcrumb .container .text-main {
        font-size: 2rem;
        font-weight: 600;
        margin: 3rem 0;
        text-align: center;
    }

    .breadcrumb .container .text-bottom {
        color: black;
        cursor: pointer;
        display: inline-block;
        position: relative;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
    }

    .breadcrumb .container .text-bottom:hover .breadcrumb-list {
        display: block;
    }

    .breadcrumb-list {
        position: absolute;
        width: 160%;
        display: none;
        animation: animation .2s linear;
        padding: 10px;
        border: 1px solid #ccc;
        box-shadow: 0 0 5px #ccc;
        left: 0;
        transform: translateY(5px);
    }

    .breadcrumb-list li {
        margin-bottom: 5px;
        cursor: pointer;
        padding: 5px;
    }

    .breadcrumb-list a {
        color: black;
        text-decoration: none;
    }

    .breadcrumb-list a:hover {
        color: #ccc;
    }
</style>

<body>

<div id="header">
    <div class="container">
    <?php include './components/nav.php';?>
    </div>
</div>

<div class="breadcrumb">
    <ul class="container">
        <li class="text-top">
            <a href="../../index.php">Trang Chủ</a> / Giỏ Hàng
        </li>
        <li class="text-main">Giỏ Hàng</li>
    </ul>   
</div>


<?php
include './components/footer.php';

?>





</body>
</html>

