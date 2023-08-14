<?php
session_start();
require '../../admin/database.php';

if (isset($_POST['btn-reg'])) {
    if (isset($_SESSION['user'])) {
        if (isset($_SESSION['cart'])) {
                    
        }
    } else {
        header('Location: ../../view/user/login.php');
        exit;
    }
}
?>
