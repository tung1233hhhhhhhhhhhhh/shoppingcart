<?php
    require "../admin/database.php";


    if (isset($_POST['btn-reg'])) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        if (!empty($fullname) && !empty($username) && !empty($password) && !empty($address) && !empty($email) && !empty($gender)) {
            $sql = "INSERT INTO `tbl_users` (`fullname`,`username`,`password`,`gender`,`email`,`address`) values('$fullname','$username','$password','$gender','$email','$address')";


            $sqlselect = $conn->query("SELECT * FROM `tbl_users`");
            $sqlselect->execute();
            $result = $sqlselect->fetch(PDO::FETCH_ASSOC);

            


            function check($result,$username)  {
                foreach ($result as $row) {
                    if ($row['username'] !== $username) {
                        return false;
                    }
                }
                return true;
            };
            if (!check($result,$username)) {
                
                try {
                    $stmt = $conn->query($sql);
                    if ($stmt) {
                    echo "Lưu giữ liệu thành công!";
                    } else {
                        echo "Lỗi";
                    }
                } catch (PDOException $e) {
                    echo "Lỗi truy vấn: " . $e->getMessage();
                }
            }
                else{
                    echo "Tên đăng nhập đã tồn tại!";
                }
            

        }else{
            
            echo "Bạn cần nhập đầy đủ giữ liệu";
        }


    }

    
?>