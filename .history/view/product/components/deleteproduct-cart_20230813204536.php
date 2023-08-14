<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
        // unset($_SESSION['cart'][$id]);
        // header("location: ./../shoppingcart.php");
        // echo '<pre>';
        // var_dump($_SESSION['cart'][$id]);
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['id']===$id) {
                var_dump($_SESSION['cart']['id']);
               unset($_SESSION['cart']['id']);
            }
        }
        // header("location: ./../shoppingcart.php");

}
?>