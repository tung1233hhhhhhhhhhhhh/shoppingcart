<?php
session_start();
require "../../admin/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
</head>

    <?php
        if (isset($_POST['login'])) {
            $email=$_POST['email'];
            $password =$_POST['password'];

            if (!empty($email) && !empty($password) ) {
                $sql=$conn->query("SELECT * FROM tbl_users ");
                $sql->execute();
                $row=$sql->fetch();

                if ($email === $row['email'] && $password === $row['password']) {
                    echo "dang nhap thanh cong";
                }else{
                    echo "Tài khoản không tồn tại";
                }
                

            }else{
                echo "Chưa nhập email or password";
            }
        }
    ?>

<body>

    <form class="form-box" method="post" action="">
        <div class="text">Login Here</div>
        <div class="form-field">
            <input type="text" class="form-input-1" name="email" placeholder=" ">
            <label for="name" class="form-label-1">Email:</label>
            <input type="password" class="form-input-2" name="password" placeholder=" ">
            <label for="password" class="form-label-2">Password:</label>
        </div>
        <button class="Login" type="submit" name="login" value="Đăng Nhập">Login</button>
        <div class="text-bottom">
            <p>Don't have an accuont?</p>
            <a href="./signup.php" class="sign-up">Sign up </a>
            <b>here</b>

            <div class="log-in">Log in With</div>
        </div>

    </form>
</body>

</html>