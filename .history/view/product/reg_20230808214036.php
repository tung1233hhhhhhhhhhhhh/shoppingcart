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
    <link rel="stylesheet" href="../../bootstrap/bootstrap-4.0.0/dist/css/bootstrap.css">

</head>
<body>
        <?php

            if (isset($_SESSION['user'])) {
                if (isset($_SESSION['cart'])) {
                   
                }
            } else {
                header('Location: ../../view/user/login.php');
                exit;
            }
        ?>

</body>
</html>

