<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/signup.css">
</head>

<body>



    <form class="form-box" method="post" action="./reg.php">
        <div class="text">Create Accuont</div>
        <div class="form-field">
            <input type="text" class="form-input-1" placeholder=" " name="fullname">
            <label for="fullname" class="form-label-1">Họ và Tên:</label>
            <input type="text" class="form-input-2" placeholder=" " name="username">
            <label for="username" class="form-label-2" >Tên Đăng Nhập:</label>
            <input type="password" class="form-input-3" placeholder=" " name="password">
            <label for="password" class="form-label-3" >Mật Khẩu</label>
            <input type="text" class="form-input-4" placeholder=" " name="email">
            <label for="Email" class="form-label-4">Email:</label>
            <input type="text" class="form-input-5" placeholder=" " name="address">
            <label for="address" class="form-label-5">Địa Chỉ:</label>
            <div class="form-gender">
                <label for="">Giới Tính:</label>
                <input type="radio" name="gender" value="male">
                <label for="">Nam</label>
                <input type="radio" name="gender" value="female">
                <label for="">Nữ</label>
            </div>
        </div>
        <button class="Login" type="submit" name="btn-reg" >Sign Up</button>

    </form>


</body>

</html>