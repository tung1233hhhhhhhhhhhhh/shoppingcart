<?php
session_start();
require '../../admin/database.php';

if (isset($_POST['btn-reg'])) {
    if (isset($_SESSION['user'])) {
        if (isset($_SESSION['cart'])) {
            $date = date("Y-m-d H:i:s"); 
            foreach ($_SESSION['user'] as $key => $values) {
                $id_kh = $values['id'];
                $sql = $conn->prepare("INSERT INTO bill (id_kh, date) VALUES (:id_kh, :date)");
                $sql->bindParam(":id_kh", $id_kh);
                $sql->bindParam(":date", $date);
                try {
                    $sql->execute();
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
