<?php
session_start();
require "../../admin/database.php";

if (isset($_POST['btn-reg'])) {
    $fullname = $_POST['fullname'];
    $sdt = $_POST['sdt'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    if (!empty($fullname) && !empty($sdt) && !empty($password) && !empty($address) && !empty($email) && !empty($gender)) {
        // Kiểm tra xem tên đăng nhập đã tồn tại hay chưa
        $stmt = $conn->prepare("SELECT COUNT(*) as count FROM tbl_users WHERE sdt = :sdt");
        $checkemail = $conn->prepare("SELECT COUNT(*) AS count FROM tbl_users WHERE email = :email ");
        $checkemail->bindParam(':email',$email);
        $stmt->bindParam(':sdt', $sdt);
        $checkemail->execute();
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $resultemail = $checkemail->fetch();

        if ($resultemail['count']>0) {
            echo "Email đã tồn tại!";
        }
        else if ($result['count'] > 0) {
            echo "Số điện thoại đã tồn tại!";
        } else {
            // Sử dụng Prepared Statements để chèn dữ liệu vào cơ sở dữ liệu
            $stmt = $conn->prepare("INSERT INTO tbl_users (fullname, sdt, password, gender, email, address) VALUES (:fullname, :sdt, :password, :gender, :email, :address)");
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':sdt', $sdt);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':address', $address);

            try {
                $stmt->execute();
                $sql=$conn->query("SELECT * From tbl_users");
                $sql->execute();
                $row=$sql->fetch();

                // khởi tạo session user
                $session_array_user = array(
                    'id'=> $row['id'],
                    'name' => $fullname,
                );
                $_SESSION['user'][] = $session_array_user;
                header("location: ../../index.php");
                // echo "Lưu giữ liệu thành công!";
                header('Location: ../../index.php');
            } catch (PDOException $e) {
                echo "Lỗi truy vấn: " . $e->getMessage();
            }
        }
    } else {
        echo "Bạn cần nhập đầy đủ thông tin";
    }
}
?>
