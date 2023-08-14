<?php
require '../database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
    <!------ Include the above in your HEAD tag ---------->
</head>



<?php

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($password)) {
        // Chuẩn bị truy vấn SQL và sử dụng Prepared Statement để tránh SQL Injection
        $stmt = $conn->prepare("SELECT * FROM tbl_useradmin WHERE username = :username AND password = :password");

        // Gán giá trị vào các tham số của truy vấn
        $stmt->bindParam(':username', $name);
        $stmt->bindParam(':password', $password);

        // Thực thi truy vấn
        $stmt->execute();

        // Lấy dữ liệu từ CSDL
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra xem có dữ liệu trả về hay không
        if ($result) {
            // Nếu tìm thấy dòng dữ liệu phù hợp, chuyển hướng đến trang home.php
            header('Location: ./home.php');
            exit; // Đảm bảo ngừng thực thi sau khi chuyển hướng
        } else {
            // Nếu không tìm thấy dòng dữ liệu phù hợp, hiển thị thông báo lỗi
            echo "Invalid username or password.";
        }
    } else {
        // Hiển thị thông báo nếu tên người dùng hoặc mật khẩu trống
        echo "Please enter both username and password.";
    }
}

?>
<style>
        body {
    margin: 0;
    padding: 0;
    background-color: #17a2b8;
    height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
    margin-top: 120px;
    max-width: 600px;
    height: 320px;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
    }
</style>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>