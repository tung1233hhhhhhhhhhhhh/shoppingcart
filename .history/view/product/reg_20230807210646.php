<?php
session_start();
require '../../admin/database.php';



if (isset($_POST['add-product'])) {

    if (isset($_SESSION['cart'])) {



    }else{
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = $conn->prepare("SELECT * FROM product WHERE id = :id");
            $sql->bindParam(':id', $id, PDO::PARAM_INT);
            $sql->execute();
            $row = $sql->fetch();
            
            $session_array = array(
                'name'=> $_POST['name'],
                'price'=>$_POST['price'],
                'img'=>$_POST['img'],
                'quantity'=>$_POST['soluong']
            );
    
            $_SESSION['cart'] =$session_array;
        
        }

       
    }

}





?>