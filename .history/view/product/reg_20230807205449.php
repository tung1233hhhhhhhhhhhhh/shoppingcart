<?php
session_start();
require '../../admin/database.php';



if (isset($_POST['add-product'])) {

    if (isset($_SESSION['cart'])) {

    }else{
        $session_array = array(
            'name'=> $_POST['name'],
            'price'=>$_POST['price'],
            'img'=>$_POST['img'],
            'quantity'=>$_POST['soluong']
        );
    }


}





?>