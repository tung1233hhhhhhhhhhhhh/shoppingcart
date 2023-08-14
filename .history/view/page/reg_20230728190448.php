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
        // Kiểm tra xem tên đăng nhập đã tồn tại hay chưa
        $stmt = $conn->prepare("SELECT COUNT(*) as count FROM tbl_users WHERE username = :username");
        $checkemail = $conn->prepare("SELECT COUNT(*) AS count FROM tbl_users WHERE email = :email ");
        $checkemail->bindParam(':email',$email);
        $stmt->bindParam(':username', $username);
        $checkemail->execute();
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $resultemail = $checkemail->fetch();

        if ($resultemail['count']>0) {
            echo "Email đã tồn tại!";
        }
        else if ($result['count'] > 0) {
            echo "Tên đăng nhập đã tồn tại!";
        } else {
            // Sử dụng Prepared Statements để chèn dữ liệu vào cơ sở dữ liệu
            $stmt = $conn->prepare("INSERT INTO tbl_users (fullname, username, password, gender, email, address) VALUES (:fullname, :username, :password, :gender, :email, :address)");
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':address', $address);

            try {
                $stmt->execute();
                // echo "Lưu giữ liệu thành công!";

                header('Location: listSp.php');
            } catch (PDOException $e) {
                echo "Lỗi truy vấn: " . $e->getMessage();
            }
        }
    } else {
        echo "Bạn cần nhập đầy đủ thông tin";
    }
}
?>
