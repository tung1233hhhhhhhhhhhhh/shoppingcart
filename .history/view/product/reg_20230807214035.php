<?php
require '../../admin/database.php';



if (isset($_POST['add-product'])) {

    $id = $_GET['id'];
    $sql = $conn->prepare("SELECT * FROM product WHERE id = :id");
    $sql->bindParam(':id', $id, PDO::PARAM_INT);
    $sql->execute();
    $row = $sql->fetch();

    if (isset($_SESSION['cart'])) {
        $session_array_id = array_column($_SESSION['cart'],"id");
        if (!in_array($id,$session_array_id)) {
            $session_array = array(
                'id' => $id,
                'name'=> $row['name_sp'],
                'price'=>$row['price'],
                'img'=>$row['img'],
                'size'=>$_POST['size'],
                'quantity'=>$_POST['soluong']
            );
    
            $_SESSION['cart'][] =$session_array;
        
        }

    }else{
           

            $session_array = array(
                'id' => $id,
                'name'=> $row['name_sp'],
                'price'=>$row['price'],
                'img'=>$row['img'],
                'size'=>$_POST['size'],
                'quantity'=>$_POST['soluong']
            );
    
            $_SESSION['cart'][] =$session_array;
        

       
    }
    header('location:./shoppingcart.php');
}





?>