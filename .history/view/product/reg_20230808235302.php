<?php
session_start();
require '../../admin/database.php';

if (isset($_POST['btn-reg'])) {
    if (isset($_SESSION['user'])) {
        if (isset($_SESSION['cart'])) {
            $date =date();
            foreach ($_SESSION['user'] as $key => $values) {
                $sql=$conn->prepare("INSERT INTO bill (id_kh,date) VALUES (:id_kh,:date)");
                $sql->bindParam(":id_kh, $values['id']");
                $sql->bindParam(":date, $date");
            }
        }
    } else {
        header('Location: ../../view/user/login.php');
        exit;
    }
}
?>
