<?php
session_start();
require '../../admin/database.php';

if (isset($_POST['btn-reg'])) {
    if (isset($_SESSION['user'])) {
        if (isset($_SESSION['cart'])) {
            $date = date("Y-m-d H:i:s"); 
            foreach ($_SESSION['user'] as $key => $values) {
                $id_kh = $values['id'];
                $sql = $conn->prepare("INSERT INTO bill (id_kh, ngaymua) VALUES (:id_kh, :date)");
                $sql->bindParam(":id_kh", $id_kh);
                $sql->bindParam(":date", $date);
                try {
                    $sql->execute();
                    $sql1 = $conn->query("SELECT * FROM bill ORDER BY id DESC LIMIT 1"); // Get the last inserted bill
                    $row = $sql1->fetch();

                    foreach ($_SESSION['cart'] as $key => $value) {
                        $idbill = $row['id'];

                        // You need to prepare the statement and bind parameters properly
                        $stmt = $conn->prepare("INSERT INTO bill_detailed (id_bill,dongia, id_sp, soluong, size) VALUES (:id_bill,:price, :id_sp, :soluong, :size)");
                        $stmt->bindParam(":id_bill", $idbill); 
                        $stmt->bindParam(":price", $value['price']); 
                        $stmt->bindParam(":id_sp", $value['id']); 
                        $stmt->bindParam(":soluong", $value['soluong']); 
                        $stmt->bindParam(":size", $value['size']); 
                        $stmt->execute();
                    }
                    unset($_SESSION['cart']);
                    header("location:../../index.php");
                } catch (PDOException $e) {
                    echo "Lỗi truy vấn: " . $e->getMessage();
                }
            }
        }
        
    } else {
        header('Location: ../../view/user/login.php');
        exit;
    }
}
?>
