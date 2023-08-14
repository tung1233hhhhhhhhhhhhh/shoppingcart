<?php
session_start();
require '../../admin/database.php';



if (isset($_POST['add-product'])) {

    if (!isset($_SESSION['cart'])) {



    }else{
       
            $id = $_GET['id'];
            $sql = $conn->prepare("SELECT * FROM product WHERE id = :id");
            $sql->bindParam(':id', $id, PDO::PARAM_INT);
            $sql->execute();
            $row = $sql->fetch();

            $session_array = array(
                'id' => $_GET['id'],
                'name'=> $row['name_sp'],
                'price'=>$row['price'],
                'img'=>$row['img'],
                'size'=>$_POST['size'],
                'quantity'=>$_POST['soluong']
            );
    
            $_SESSION['cart'][] =$session_array;
            var_dump($_SESSION['cart']);
        

       
    }

}





?>